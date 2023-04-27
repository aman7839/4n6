<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CoachStudent;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function updatePassword(Request $request) {
        $input = $request->all();
        $user = User::Where('id',$input["user_id"])->first();
        if($user){
            $user->password=Hash::make($input['password']);
            $user->save();
            ///send email to user with password
        }
        return back()
        ->with('success','Password updated successfully');
    
    }
	
	public function addstudentbycoach(Request $request) {
		$input = $request->all();
		$coach_data = User::Where('id',$input["user_id"])->first();
		if($coach_data){
			
			$user = new user;
			$user->user_name = $input['user_name'];
			$user->password = Hash::make($input['password']);
			$user->school_email_address = $coach_data->school_email_address;
			$user->name = $coach_data->name;
			$user->school_name = $coach_data->school_name;
			$user->personal_phone_no = $coach_data->personal_phone_no;
			$user->school_address = $coach_data->school_address;
			$user->assistant_coach_name = $coach_data->assistant_coach_name;
			$user->school_city = $coach_data->school_city;
			$user->assistant_coach_email_address = $coach_data->assistant_coach_email_address;
			$user->school_state = $coach_data->school_state;
			$user->school_zip_code = $coach_data->school_zip_code;
			$user->billing_contact_name = $coach_data->billing_contact_name;
			$user->billing_email_address = $coach_data->billing_email_address;
			$user->billing_phone_no = $coach_data->billing_phone_no;
			$user->save();
			$this->addcoachstudent($coach_data->id,$user->id);
			return back()->with('success','Student Successfully Added');
        }
    }
	public function addcoachstudent($coach_id,$student_id){
		$CoachStudent = new CoachStudent;
		$CoachStudent->coach_id = $coach_id;
		$CoachStudent->student_id = $student_id;
		$CoachStudent->save();
		
	}
}
