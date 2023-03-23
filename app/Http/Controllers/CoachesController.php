<?php

namespace App\Http\Controllers;

use App\Models\CoachStudent;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;



use Illuminate\Support\Facades\Auth;


class CoachesController extends Controller
{
    //
    public function Dashboard()

    {

      return View('Coaches.dashboard');

    }
    public function logout()

    {

        Auth::logout();        
        return redirect('login');
    }

    public function Students(Request $request)

    {
        $coach_id= Auth::user()->id;

        $students= CoachStudent::where('coach_id', $coach_id)->with(['student', 'coach'])->paginate(10);


       return View('Coaches.students',compact('students','coach_id'));

    }
    public function addStudent(Request $request)

    {


      return View('Coaches.addstudent');

    }

    public function SaveStudent(Request $request)

    {

         $request->validate([
          
            'user_name' => ['required', 'string',  'regex:/^[a-zA-Z]+$/u','max:255', 'unique:users'],
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'personal_phone_no' => 'required|numeric|unique:users,personal_phone_no|digits:10',
            'school_city' => 'required',
            'password' => 'required',

        ]);

        $student = new User();

        $student->name = $request->name;
        $student->user_name = $request->user_name;
        $student->email = $request->email;
        $student->personal_phone_no = $request->personal_phone_no;
        $student->school_city = $request->school_city;
        $student->password = Hash::make($request->password);
        $student->role = 'student';

        $student->save();

        $coach_id= Auth::user()->id;
        $student_id = $student->id;

        $coach_student= new CoachStudent();

        $coach_student->coach_id = $coach_id;
        $coach_student->student_id = $student_id;

        $coach_student->save();


      return redirect('coach/students')->with('success','Student Added successfully');

    }
    public function editStudent($id)

    {
       $student = CoachStudent::find($id);

      return View('Coaches.editstudent',compact('student'));

    }
    public function updateStudent(Request $request,$id)

    {
      $student =  CoachStudent::find($id);

      $studentid = $student->student->id;

      
        $request->validate([
            'personal_phone_no'   =>  [
                'numeric',
                'required',
                'digits:10',
                 Rule::unique('users')->ignore($studentid),
            ],
            'email'   =>  [
                'required',
                Rule::unique('users')->ignore($studentid),

            ],
            'name'   =>  [
                'required',
            ],
            'school_city'   =>  [
                'required',
            ],
            

        ]);

        

        $student->student->name =   $request->input('name');

        $student->student->email =   $request->input('email');
        $student->student->personal_phone_no =   $request->input('personal_phone_no');
        $student->student->school_city =   $request->input('school_city');

        $student->student->update();

        
      return redirect('coach/students')->with('success','Student Updated successfully');

    }
    public function DeleteStudent($id)

    {
     
    echo
          User::where('id', $id)->delete();
          CoachStudent::where('student_id',$id)->delete();
         
       
        return redirect()->back()->with('success', 'Student Deleted Successfully');


    }
   
   



}
