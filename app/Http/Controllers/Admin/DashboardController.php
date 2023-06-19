<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\CoachStudent;
use App\Models\EditPage;
use App\Models\states;

use App\Models\Membership;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rule;
use Illuminate\Http\Response;
// use DB;






class DashboardController extends Controller
{


    public function login()
    {

        return view('frontendviews.login');
    }
    public function index()
    {

        return view('admin.dashboard.index');
    }
    
    

    


    public function loginAdmin(Request $request)
    {   $input = $request->all();
        $this->validate($request, [
            'user_name' => 'required',
            'password' => 'required',
        ]);
        
        $fieldType = filter_var($request->user_name, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';
        if(auth()->attempt(array($fieldType => $input['user_name'], 'password' => $input['password']))){
            
             $request->session()->regenerate();
       

            return redirect('admin/users')->with('success', 'Welcome Admin');
        } 

     
          else{
       

            return redirect()->back()->with('error', 'Invalid credentials');
        }
        

        
    }


     public function editProfile($id){

            $user = user::find($id);

    
        return view('admin.Users.editProfile',compact('user'));
    


     }


     public function updateProfile(Request $request, $id)
     {

        $user = user::find($id);
        
        $request->validate([
            'personal_phone_no'   =>  [
                'numeric',
                'required',
                'digits:10',
                 Rule::unique('users')->ignore($id),
            ],
            'email'   =>  [
                'required',
                 Rule::unique('users')->ignore($id),
            ],
            
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
 
 
        
 
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         if ($request->hasfile('image')) {
             $destination = 'public/images/' . $user->image;
             if (File::exists($destination)) {
                 File::delete($destination);
             }
             $file = $request->file('image');
             $imageName = time() . '-' . $file->getClientOriginalName();
             $file->move('public/images/', $imageName);
             $user->image =   $imageName;
         }

         $user->personal_phone_no = $request->input('personal_phone_no');
         
         $user->school_city = $request->input('school_city');
         $user->update();
        
        

         return redirect()->back()->with('success', 'Profile updated Successfully');
     }


        public function showChangePasswordGet() {

        return view('admin.Users.changePassword');
    }

         public function changePasswordPost(Request $request)
         {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not match with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

            $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:4|confirmed',
        ]);

        // Change Password
        $user = Auth::user();

        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }




    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('login');
    }


    public function dashboard()
    {

        return view('admin.dashboard.index');
    }


    public function users(Request $request)
    {
		$sortColumn = $request->get('sort');
        $sortOrder = $request->get('order', 'asc');
        if ($sortColumn === $request->get('sort') && $sortOrder === 'asc') {
            $sortDirection = 'desc';
        } else {
            $sortDirection = 'asc';
        }
        $search = $request['search'] ?? "";
        $coach_id = $request->id ?? "";
        if ($search != ""){
			if($coach_id){

				
				$user = DB::table('coach_student as a')->leftjoin('users as b', 'a.student_id', '=', 'b.id')->where('a.coach_id','=',$request->id)->where('name', 'Like', '%'.$search. '%' )->orwhere('email', 'Like','%'.$search.'%')->orderBy('a.id')->paginate(20);
				
			} else {	

				$user = user::where('name', 'Like', '%'.$search. '%' )->orwhere('email', 'Like','%'.$search.'%')->orwhere('school_name', 'Like','%'.$search.'%')->paginate('10');
                $user->appends(['search' => $search]);

			}
        }
        else{
			if($coach_id){
				$user = DB::table('coach_student as a')->leftjoin('users as b', 'a.student_id', '=', 'b.id')->where('a.coach_id','=',$request->id)->orderBy('a.id')->paginate(20);
			} elseif($sortColumn != null)
            {
				// $user = User::paginate(10);
                $user = User::where('role','coach')->orderBy($sortColumn, $sortOrder)->paginate(20);
                $user->appends(['sort' => $sortColumn, 'order' => $sortOrder]);
			}else {

				$user = User::where('role','coach')->orderBy('id','desc')->paginate(20);

            }

        }
       return view('admin.Users.users', compact('user','search','coach_id','sortColumn','sortOrder','sortDirection'));
    }



    

    public function addusers()
    {
        $states = states::all();

        return view('admin.Users.addUsers', compact('states'));
    }
    // public function saveUsers(Request $request)
    // {



    //     $request->validate([

    //         'user_name' => 'required|min:4|unique:users',
    //         'email' => 'required|email|unique:users,email',
    //         'personal_phone_no' => 'required|numeric|unique:users,personal_phone_no|digits:10',
    //         'school_city' => 'required',
    //         'password' => 'required',
    //         'role' => 'required',

    //         'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

    //     ]);
    //     if ($request->hasfile('image')) {
    //         $file = $request->file('image');
    //         $imageName = time() . '-' . $file->getClientOriginalName();
    //         $file->move('public/images/', $imageName);

    //         $user = new user;

    //         $user->user_name = $request->user_name;
    //         $user->email = $request->email;
    //         $user->image =   $imageName;
    //         $user->personal_phone_no = $request->personal_phone_no;
    //         $user->role = $request->role;
    //         $user->name = $request->name;

    //         $user->school_city = $request->school_city;
    //         $user->password = Hash::make($request->password);
    //         $user->save();
    //         return redirect('admin/users')->with('success','User Added Successfully');

            
    //     }
    // }
    public function saveUsers(Request $request)
    {

        $request->validate([
          
            // 'user_name' => ['required', 'string',  'regex:/^[a-zA-Z]+$/u','max:255', 'unique:users'],
            'user_name' => ['required', 'unique:users'],

           // 'student_username' => ['required','different:user_name','unique:users'],
            'school_email' => 'required',
            // 'confirm_school_email'=> 'required_with:school_email_address|same:school_email_address|',
            'email' => 'required|email|unique:users,email',
            // 'confirm_email'=> 'required_with:email|same:email|',
            'personal_phone_no' => 'required|numeric|unique:users,personal_phone_no|digits:10',
            'assist_email'=>'required',
            // 'confirm_assistant_coach_email_address'=> 'required_with:assistant_coach_email_address|same:assistant_coach_email_address|',
            'billing_email'=>'required',
            // 'confirm_billing_email'=> 'required_with:billing_email_address|same:billing_email_address|',
            'school_phone_no' => 'required',
            'billing_phone_no' => 'required',
            'school_name' => 'required',
            'name' => 'required',
            'school_address' => 'required',
            'assist_name' => 'required',
            'school_city' => 'required',
            'school_state' => 'required',
            'school_zip' => 'required',
            'billing_name' => 'required',
            'password' => 'required',
            'student_password' => 'required',
            'registration_date' => 'required',
            'expiration_date' => 'required',
            'amount' => 'required',
            'student_user_name'=> 'required',
            'status' => 'required'

        //     'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        

       


        if(isset($request->user_name) && isset($request->student_user_name)){

            $error ="";

            //Check Student username from database users table. 
            $IsStudentUsername =count(DB::table('users')->where('user_name','=',$request->student_user_name)->get());

            if( $IsStudentUsername == 0){



                if($request->user_name != $request->student_user_name){


                    // $details = [
                    //     // 'name' => $messages->name,
                    //     'user_name' =>  $request->name,
                    //     'school_name'=> $request->school_name
                    // ];
                    $usercoach = new User;

                    // if ($request->hasfile('image')) {
                    //     $file = $request->file('image');
                    //     $imageName = time() . '-' . $file->getClientOriginalName();
                    //     $file->move('/public/images/', $imageName);
                    // $user->image =   $imageName;}
            
                        
                        $usercoach->user_name = $request->user_name;
            
                        $usercoach->school_email_address = $request->school_email;
            
                        $usercoach->email = $request->email;
            
                        $usercoach->assistant_coach_email_address = $request->assist_email;
            
                        $usercoach->billing_email_address = $request->billing_email;
            
                        $usercoach->school_phone_no = $request->school_phone_no;
            
                        $usercoach->billing_phone_no = $request->billing_phone_no;
            
                        $usercoach->school_name = $request->school_name;
            
                        $usercoach->name = $request->name;
            
                        $usercoach->school_address = $request->school_address;
            
                        $usercoach->assistant_coach_name = $request->assist_name;
                        $usercoach->school_city = $request->school_city;
            
                        $usercoach->personal_phone_no = $request->personal_phone_no;
                        $usercoach->school_state = $request->school_state;
            
                        $usercoach->school_zip_code = $request->school_zip;
            
                        $usercoach->billing_contact_name = $request->billing_name;
            
                        $usercoach->billing_email_address = $request->billing_email;
            
                        $usercoach->billing_phone_no = $request->billing_phone_no;

                        // $usercoach->payment_method = $request->payment_method;
           
                        $usercoach->password = Hash::make($request->password);
            
                        $usercoach->role = 'coach';
                       
                        // if($request->payment_method == "check/po"){
                
                        // Mail::to($request->email)->send(new \App\Mail\SignUpMail($details));
                        // Mail::to($request->assistant_coach_email_address)->send(new \App\Mail\SignUpMail($details));
                        // Mail::to($request->billing_email_address)->send(new \App\Mail\SignUpMail($details));

                        // // ->cc($request->assistant_coach_email_address)
                        // // ->bcc($request->billing_email_address)
                
                
                        // }
            
                            $usercoach->save();



                            
            
                          $user = new User;
            
                    // if ($request->hasfile('image')) {
                    //     $file = $request->file('image');
                    //     $imageName = time() . '-' . $file->getClientOriginalName();
                    //     $file->move('/public/images/', $imageName);
                    // $user->image =   $imageName;}
            
                        
                        $user->user_name = $request->student_user_name;
            
                        $user->school_email_address = $request->school_email;
            
                        // $user->email = $request->email;
            
                        $user->assistant_coach_email_address = $request->assist_email;
            
                        $user->billing_email_address = $request->billing_email;
            
                        $user->school_phone_no = $request->school_phone_no;
            
                        $user->billing_phone_no = $request->billing_phone_no;
            
                        $user->school_name = $request->school_name;
            
                        // $user->name = $request->name;
            
                        $user->school_address = $request->school_address;
            
                        $user->assistant_coach_name = $request->assist_name;
                        $user->school_city = $request->school_city;
            
                        $user->personal_phone_no = $request->personal_phone_no;
                        $user->school_state = $request->school_state;
            
                        $user->school_zip_code = $request->school_zip;
            
                        $user->billing_contact_name = $request->billing_name;
            
                        $user->billing_email_address = $request->billing_email;
            
                        $user->billing_phone_no = $request->billing_phone_no;
                        
                        // $usercoach->payment_method = $request->payment_method;
                        
                        $user->password = Hash::make($request->student_password);
            
                        $user->role = 'student';
            
                          $user->save();
            
                       $coach_id= $usercoach->id;
                       $student_id = $user->id;
            
                       $coach_student= new CoachStudent();
               
                       $coach_student->coach_id = $coach_id;
                      $coach_student->student_id = $student_id;
            
                       $coach_student->save();

                       $coach_membership = new Membership();

                       $coach_membership->start_date = $request->registration_date;
                       $coach_membership->end_date = $request->expiration_date;
                       $coach_membership->amount = $request->amount;
                       $coach_membership->user_id = $coach_id;
                       $coach_membership->payment_mode = 'Check';
                       $coach_membership->status = $request->status;

                       $coach_membership->save();


                        
                        return redirect()->back()->with('success','Coach added successfully');
            

                }else{
    
                    $error = "Coach username and Student username should be unique.";
    
                }

            }else{

                $error = "Student username already exist.";

            }
           

            
        }else{

            $error = " Please fill required fields.";

        }
        if($error != ""){

            return redirect()->back()->with('error',$error);
        }

        


        }
    public function editUsers($id)
    {


        $user = user::find($id);
        if($user){

        return view('admin.Users.updateusers', compact('user'));
        }
        else{
            return redirect()->back();
        }
    }


    public function viewUser($id){
        $user = user::find($id);
        if($user){
            // echo "<pre>"; print_r($user->toArray()); exit;
        return view('admin.Users.viewuser', compact('user'));
        }
        else{
            return redirect()->back();
        }
    }

    public function showPageContent(){


      $pageContent = EditPage::all();

      return view('admin.contentEditor.coachHome', compact('pageContent'));


    }

    public function editPageContent($id){
    
       
        $editPageContent = EditPage::find($id);

      return view('admin.contentEditor.editcoachHome', compact('editPageContent'));

    }

    public function savePageContent(Request $request,$id){
    
        

        $editPageContent = EditPage::find($id);

        $editPageContent->page_description = $request->input('description');

        $editPageContent->update();

      return view('admin.contentEditor.editcoachHome', compact('editPageContent'));

    }

    public function updateUsers(Request $request, $id)
    {
        $user = user::find($id);
        $role = $user->role;
	
        $request->validate([
            
            'personal_phone_no'   =>  [
                'numeric',
                'required',
                'digits:10',
                 Rule::unique('users')->ignore($id),
            ],
            'email'   =>  [
                'required',
            
                 Rule::unique('users')->ignore($id),
            ],
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);


       

        $user->email = $request->input('email');
        if ($request->hasfile('image')) {
            $destination = 'public/images/' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('public/images/', $imageName);
            $user->image =   $imageName;
        }



        $user->name =  $request->input('name');

        $user->personal_phone_no = $request->input('personal_phone_no');
        $user->school_city = $request->input('school_city');
		if($role=="coach") { 
			
			 $user->school_phone_no = $request->input('school_phone_no');
			 $user->school_name = $request->input('school_name');
			 $user->personal_phone_no = $request->input('personal_phone_no');
			 $user->school_address = $request->input('school_address');
			 $user->assistant_coach_name = $request->input('assistant_coach_name');
			 $user->school_city = $request->input('school_city');
			 $user->assistant_coach_email_address = $request->input('assistant_coach_email_address');
			 $user->school_state = $request->input('school_state');
			 $user->school_zip_code = $request->input('school_zip_code');
			 $user->billing_contact_name = $request->input('billing_contact_name');
			 $user->billing_email_address = $request->input('billing_email_address');
			 $user->billing_phone_no = $request->input('billing_phone_no');
			
		}	
        $user->update();

        return redirect('admin/users')->with('success', 'User updated Successfully');
    }


    public function home()
    {
        return view('admin.dashboard.home');
    }



    public function destroy($id)
    { 
            $user = user::find($id);
            $user->delete();
            return redirect()->back()->with('error', 'User Deleted Successfully');
        
    }
   
}
