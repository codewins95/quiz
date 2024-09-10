<?php

namespace Modules\Quiz\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ImageStore;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Quiz\App\Models\QuestionAnswer;
use Modules\Quiz\App\Models\QuestionBank;
use Modules\Quiz\App\Models\QuestionLevel;
use Modules\Quiz\App\Models\QuestionOption;
use Modules\Quiz\App\Models\QuestionPapper;

class QuestionBankController extends Controller
{

    use ImageStore;

    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('quiz::question_bank.index', compact('categories'));
    }

    public function bankFilter(Request $request)
    {
        if ($request->subCategoryId != '') {
            $catId = $request->subCategoryId;
        } else {
            $catId = $request->categoryId;
        }
        $papers = QuestionPapper::where('category_id', $catId)->get();

        if ($papers->isEmpty()) {
            Toastr::info('Question Paper Not found. Please try again.', 'Oops...');
            return redirect()->back();
        }

        $categories = Category::find($catId);
        $papers  =  QuestionPapper::paginate(6);
        return view('quiz::question_bank.paper', compact('categories', 'papers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function questionBank($id)
    {
        $papers = QuestionPapper::find($id);

        if (empty($papers)) {
            Toastr::info('Question Paper Not found. Please try again.', 'Oops...');
            return redirect()->back();
        }

        $questions = QuestionBank::where('papper_id', $id)->get();

        return view('quiz::question_bank.question_bank', compact('papers', 'questions'));
    }


    public function create($id)
    {

        $papers = QuestionPapper::find($id);

        if (empty($papers)) {
            Toastr::info('Question Paper Not found. Please try again.', 'Oops...');
            return redirect()->back();
        }
        $levels = QuestionLevel::all();
        return view('quiz::question_bank.question_add', compact('papers', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $questionBankData = [
            'category_id' => $request->category_id,
            'papper_id' => $request->papper_id,
            'level_id' => $request->level_id,
            'question' => $request->question ?: null,
            'explanation' => $request->explanation ?: null,
            'hints' => $request->hints ?: null,
            'type' => $request->type,
            'totalOption' => $request->totalOption,
            'create_user_id' => Auth::id(),
        ];

        // if ($request->hasFile('photo')) {
        //     $questionBankData['upload'] = $this->saveImage($request->photo);
        // }

        if ($request->hasFile('photo')) {
            $questionBankData['upload'] = $this->saveImage($request->file('photo'));
        }


        try {
            DB::beginTransaction();

            $question = QuestionBank::create($questionBankData);

            $this->handleQuestionOptions($question, $request);

            DB::commit();

            Toastr::success('Operation successful', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            // return $e->getMessage();
            Log::error($e->getMessage());
            DB::rollBack();
            Toastr::error('Operation failed', 'Failed');
            return redirect()->back();
        }
    }




    private function handleQuestionOptions(QuestionBank $question, Request $request)
    {
        if ($request->type == 1 || $request->type == 2) {

            $totalOption = $request->totalOption;
            // $existingOptions = QuestionOption::where('questionID', $question->id)->pluck('id')->toArray();
            $existingOptions = QuestionOption::where('questionID', $question->id)->get();

            // Create missing options
            if (count($existingOptions) == 0) {
                for ($optionId = 1; $optionId <= $totalOption; $optionId++) {

                    $existingOptions[] = QuestionOption::create([
                        'name' => '',
                        'questionID' => $question->id,
                    ]);
                }
            }

            // Update options and answers
            foreach ($request->option as $key => $option) {
                $option_Id = $existingOptions[$key] ?? null;

                $optionImgKey = 'image' . ($key + 1);
                $optionImg = $request->$optionImgKey ? $this->saveImage($request->$optionImgKey) : '';


                $data = [
                    'name' => $option,
                    'img' => $optionImg
                ];

                QuestionOption::where('id', $option_Id->id)->update($data);

                if (in_array($key + 1, $request->answer)) {
                    QuestionAnswer::create([
                        'questionID' => $question->id,
                        'optionID' => $option_Id->id,
                        'question_type' => $request->type,
                    ]);
                }
            }
        } elseif ($request->type == 3) {
            $totalOption = count(array_filter($request->answer, 'strlen'));

            foreach ($request->answer as $answer) {
                if (empty($answer)) continue;

                $ans = new QuestionAnswer([
                    'questionID' => $question->id,
                    'text' => $answer,
                    'question_type' => $request->type,
                ]);
                $ans->save();
            }
        }
    }


    // public function edit($paper_id, $bank_id)
    // {
    //     $paper = QuestionPapper::find($paper_id);
    //     $levels = QuestionLevel::all();
    //     $question = QuestionBank::find($bank_id);
    //     return view('quiz::question_bank.question_edit', compact('paper', 'levels', 'question'));
    // }

    public function edit($paper_id, $questionID)
    {
        $questionID = (int) htmlentities($questionID);

        if ($questionID !== 0) {
            $questionBank = QuestionBank::find($questionID);

            if ($questionBank) {
                $totalOptionID   = $questionBank->totalOption;
                $dbTotalOptionID = QuestionOption::where('questionID', $questionID)
                    ->where('name', '!=', '')
                    ->pluck('id', 'name');
                
                $paper = QuestionPapper::find($paper_id);
                $levels = QuestionLevel::orderBy('id')->get();
                $options = QuestionOption::where('questionID', $questionID)->pluck('name', 'id');

                if ($questionBank->type == 1 || $questionBank->type == 2) {
                    $answers = QuestionAnswer::where('questionID', $questionID)->pluck('optionID');
                } elseif ($questionBank->typeNumber == 3) {
                    $answers = QuestionAnswer::where('questionID', $questionID)->pluck('text');
                }
                
                $datas = [
                    'question_bank'   => $questionBank,
                    'totalOptionID'   => $totalOptionID,
                    'dbTotalOptionID' => $dbTotalOptionID,
                    'levels'          => $levels,
                    'options'         => $options,
                    'answers'         => $answers,
                    'paper'            =>$paper
                ];

                return view('quiz::question_bank.question_edit', $datas);
            }
        }

        Toastr::error('Invalid question ID', 'Failed');
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'papper_id' => 'required|integer',
            'level_id' => 'required|integer',
            'type' => 'required|integer',
            'totalOption' => 'required|integer|min:0',
            'question' => 'nullable|string',
            'explanation' => 'nullable|string',
            'hints' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $questionBankData = [
            'category_id' => $request->category_id,
            'papper_id' => $request->papper_id,
            'level_id' => $request->level_id,
            'question' => $request->question ?: null,
            'explanation' => $request->explanation ?: null,
            'hints' => $request->hints ?: null,
            'type' => $request->type,
            'totalOption' => $request->totalOption,
            'update_user_id' => Auth::id(),
        ];

        if ($request->hasFile('photo')) {
            $questionBankData['upload'] = $this->saveImage($request->file('photo'));
        }

        try {
            DB::beginTransaction();

            $question = QuestionBank::findOrFail($id);
            $question->update($questionBankData);

            $this->handleQuestionOptionsUpdate($question, $request);

            DB::commit();

            Toastr::success('Question updated successfully', 'Success');
            return redirect()->route('admin.quiz.question.bank.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            Toastr::error('Failed to update the question', 'Error');
            return redirect()->back();
        }
    }

    private function handleQuestionOptionsUpdate(QuestionBank $question, Request $request)
    {
        QuestionOption::where('questionID', $question->id)->delete();
        QuestionAnswer::where('questionID', $question->id)->delete();

        if ($request->type == 1 || $request->type == 2) {
            foreach ($request->option as $key => $option) {
                $optionImgKey = 'image' . ($key + 1);
                $optionImg = $request->hasFile($optionImgKey) ? $this->saveImage($request->file($optionImgKey)) : null;

                $optionData = QuestionOption::create([
                    'name' => $option,
                    'img' => $optionImg,
                    'questionID' => $question->id,
                ]);

                if (in_array($key + 1, $request->answer)) {
                    QuestionAnswer::create([
                        'questionID' => $question->id,
                        'optionID' => $optionData->id,
                        'question_type' => $request->type,
                    ]);
                }
            }
        } elseif ($request->type == 3) {
            foreach ($request->answer as $answer) {
                if (empty($answer)) continue;

                QuestionAnswer::create([
                    'questionID' => $question->id,
                    'text' => $answer,
                    'question_type' => $request->type,
                ]);
            }
        }
    }

    private function saveImage($image)
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/questions'), $imageName);
        return 'uploads/questions/' . $imageName;
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
