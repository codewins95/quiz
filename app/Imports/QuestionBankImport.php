<?php
namespace App\Imports;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Modules\Quiz\App\Models\QuestionAnswer;
use Modules\Quiz\App\Models\QuestionBank;
use Modules\Quiz\App\Models\QuestionOption;

class QuestionBankImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $questionBankData = [
            'papper_id'      => $row['paper_id'],
            'category_id'    => $row['category_id'],
            'level_id'       => 3,
            'type'           => 1,
            'question'       => $row['question'],
            'explanation'    => $row['explanation'] ?? null,
            'hints'          => $row['hints'] ?? null,
            'totalOption'    => $row['totaloption'],
            'create_user_id' => Auth::id(),
            'active_status'  => 1
        ];
        $row['type'] = 1;
    
        try {
            $question = QuestionBank::create($questionBankData);
            // Handling question options and answers from the Excel row
            $this->handleQuestionOptions($question, $row);

        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }

    private function handleQuestionOptions(QuestionBank $question, array $row)
    {
        if ($row['type'] == 1 || $row['type'] == 2) {
            $totalOption = $row['totaloption'];

            // Create options and associate them with the question
            for ($optionId = 1; $optionId <= $totalOption; $optionId++) {
                $optionKey = 'option' . $optionId;

                // Create option without image
                $questionOption = QuestionOption::create([
                    'name'       => $row[$optionKey] ?? '',
                    'questionID' => $question->id,
                ]);

                // Create answer if the option is marked as correct
                if (in_array($optionId, explode(',', $row['answer']))) {
                    QuestionAnswer::create([
                        'questionID'    => $question->id,
                        'optionID'      => $questionOption->id,
                        'question_type' => $row['type'],
                    ]);
                }
            }
        } elseif ($row['type'] == 3) {
            // If it's a fill-in-the-blank type, create answers directly
            foreach (explode(',', $row['answer']) as $answer) {
                if (!empty($answer)) {
                    QuestionAnswer::create([
                        'questionID'    => $question->id,
                        'text'          => $answer,
                        'question_type' => $row['type'],
                    ]);
                }
            }
        }

    }
}
