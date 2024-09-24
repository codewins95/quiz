<?php

namespace Modules\Student\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\FileStore;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Modules\Student\App\Models\Student;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    use FileStore;
    public function index()
    {
        $students = Student::all();
        return view('student::index', compact('students'));
    }

    public function create()
    {
        return view('student::create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:students,email',
            'phone' => 'required|string|max:15',
            'gender' => 'required|in:male,female,other',
            'dob' => 'required|date',
            'religion' => 'nullable|string|max:50',
            'country' => 'required|string|max:50',
            'state' => 'required|string|max:50',
            'address' => 'required|string',
            'username' => 'required|string|max:50|unique:students,username',
            'password' => 'required|string|min:8',
        ]);

        try {

            $student = new Student();
            $student->studentID = uniqid();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->gender = $request->gender;
            $student->dob = $request->dob;
            $student->religion = $request->religion;
            $student->country = $request->country;
            $student->state = $request->state;
            $student->address = $request->address;

            if ($request->photo != '') {
                $student->photo = $this->imageUpload($request->photo, 'profile');
            }

            $student->username = $request->username;
            $student->password = Hash::make($request->password);
            $student->role = 'student';
            $student->create_userID = Auth::user()->id;
            $student->active = $request->active ?? true;
            $student->save();

            Toastr::success('Student created successfully', 'Success');
            return redirect()->route('admin.student.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Toastr::error('Operation failed', 'Failed');
            return redirect()->back();
        }
    }


    public function edit(Student $student)
    {
        return view('student::edit', compact('student'));
    }

    
    public function update(Request $request, $id)
    {
        try {
            $student = Student::find($id);

            if (!$student) {
                Toastr::error('Student not found', 'Failed');
                return redirect()->back();
            }

            $request->validate([
                'name' => 'required|string|max:100',
                'email' => 'required|string|email|max:100|unique:students,email,' . $id,
                'phone' => 'required|string|max:15',
                'gender' => 'required|in:male,female,other',
                'dob' => 'required|date',
                'religion' => 'nullable|string|max:50',
                'country' => 'required|string|max:50',
                'state' => 'required|string|max:50',
                'address' => 'required|string',
                'username' => 'required|string|max:50|unique:students,username,' . $id,
                'password' => 'nullable|string|min:8',
            ]);


            if ($request->photo != '') {
                $this->deleteImageDirect($student->photo);
                $student->photo = $this->imageUpload($request->photo, 'profile');
            }

            if ($request->password) {
                $student->password = Hash::make($request->password);
            }

            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->gender = $request->gender;
            $student->dob = $request->dob;
            $student->religion = $request->religion;
            $student->country = $request->country;
            $student->state = $request->state;
            $student->address = $request->address;
            $student->username = $request->username;
            $student->active = $request->active ?? $student->active;
            $student->save();

            Toastr::success('Student updated successfully', 'Success');
            return redirect()->route('admin.student.index');
        } catch (\Exception $e) {
            // return  $e->getMessage();
            Log::error($e->getMessage());
            Toastr::error('Operation failed', 'Failed');
            return redirect()->back();
        }
    }

   
    public function destroy(Request $request)
    {
        $student = Student::find($request->id);

        if (!$student) {
            Toastr::error('Student not found', 'Failed');
            return redirect()->back();
        }
        $this->deleteImageDirect($student->photo);
        $student->delete();
        Toastr::success('Student deleted successfully', 'Success');
        return redirect()->route('admin.student.index');
    }
}
