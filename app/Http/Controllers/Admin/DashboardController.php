<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Response;
use DB;






class DashboardController extends Controller
{


    public function login()
    {

        return view('admin.Users.login');
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
                $user = User::orderBy($sortColumn, $sortOrder)->paginate(20);
                $user->appends(['sort' => $sortColumn, 'order' => $sortOrder]);
			}else {

				$user = User::paginate(20);

            }

        }
       return view('admin.Users.users', compact('user','search','coach_id','sortColumn','sortOrder','sortDirection'));
    }



    

    public function addusers()
    {

        return view('admin.Users.addUsers');
    }
    public function saveUsers(Request $request)
    {



        $request->validate([

            'user_name' => 'required|min:4|unique:users',
            'email' => 'required|email|unique:users,email',
            'personal_phone_no' => 'required|numeric|unique:users,personal_phone_no|digits:10',
            'school_city' => 'required',
            'password' => 'required',
            'role' => 'required',

            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('public/images/', $imageName);

            $user = new user;

            $user->user_name = $request->user_name;
            $user->email = $request->email;
            $user->image =   $imageName;
            $user->personal_phone_no = $request->personal_phone_no;
            $user->role = $request->role;
            $user->name = $request->name;

            $user->school_city = $request->school_city;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('admin/users')->with('success','User Added Successfully');

            
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
