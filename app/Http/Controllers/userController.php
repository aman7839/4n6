<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\awards;
use App\Models\CoachStudent;
use App\Models\Membership;
use App\Models\state;
use App\Models\states;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

 use Carbon\Carbon;


class userController extends Controller
{
    public function registerUser(Request $request)
    {
        $request->validate([
          
            'user_name' => ['required', 'string',  'regex:/^[a-zA-Z]+$/u','max:255', 'unique:users'],
           // 'student_username' => ['required','different:user_name','unique:users'],
            'school_email_address' => 'required',
            'confirm_school_email'=> 'required_with:school_email_address|same:school_email_address|',
            'email' => 'required|email|unique:users,email',
            'confirm_email'=> 'required_with:email|same:email|',
            'personal_phone_no' => 'required|numeric|unique:users,personal_phone_no|digits:10',
            'assistant_coach_email_address'=>'required',
            'confirm_assistant_coach_email_address'=> 'required_with:assistant_coach_email_address|same:assistant_coach_email_address|',
            'billing_email_address'=>'required',
            'confirm_billing_email'=> 'required_with:billing_email_address|same:billing_email_address|',
            'school_phone_no' => 'required',
            'billing_phone_no' => 'required',
            'school_name' => 'required',
            'name' => 'required',
            'school_address' => 'required',
            'assistant_coach_name' => 'required',
            'school_city' => 'required',
            'school_state' => 'required',
            'school_zip_code' => 'required',
            'billing_contact_name' => 'required',
            'password' => 'required',
        //     'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        

        // Validator::make($request->student_username, [
        //     'student_username' => ['required','different:user_name','unique:users'],
        // ]);


        if(isset($request->user_name) && isset($request->student_username)){

            $error ="";

            //Check Student username from database users table. 
            $IsStudentUsername =count(DB::table('users')->where('user_name','=',$request->student_username)->get());

            if( $IsStudentUsername == 0){



                if($request->user_name != $request->student_username){


                    $details = [
                        // 'name' => $messages->name,
                        'user_name' =>  $request->name,
                        'school_name'=> $request->school_name
                    ];
                    $usercoach = new User;

                    // if ($request->hasfile('image')) {
                    //     $file = $request->file('image');
                    //     $imageName = time() . '-' . $file->getClientOriginalName();
                    //     $file->move('/public/images/', $imageName);
                    // $user->image =   $imageName;}
            
                        
                        $usercoach->user_name = $request->user_name;
            
                        $usercoach->school_email_address = $request->school_email_address;
            
                        $usercoach->email = $request->email;
            
                        $usercoach->assistant_coach_email_address = $request->assistant_coach_email_address;
            
                        $usercoach->billing_email_address = $request->billing_email_address;
            
                        $usercoach->school_phone_no = $request->school_phone_no;
            
                        $usercoach->billing_phone_no = $request->billing_phone_no;
            
                        $usercoach->school_name = $request->school_name;
            
                        $usercoach->name = $request->name;
            
                        $usercoach->school_address = $request->school_address;
            
                        $usercoach->assistant_coach_name = $request->assistant_coach_name;
                        $usercoach->school_city = $request->school_city;
            
                        $usercoach->personal_phone_no = $request->personal_phone_no;
                        $usercoach->school_state = $request->school_state;
            
                        $usercoach->school_zip_code = $request->school_zip_code;
            
                        $usercoach->billing_contact_name = $request->billing_contact_name;
            
                        $usercoach->billing_email_address = $request->billing_email_address;
            
                        $usercoach->billing_phone_no = $request->billing_phone_no;

                        $usercoach->payment_method = $request->payment_method;
           
                        $usercoach->password = Hash::make($request->password);
            
                        $usercoach->role = 'coach';
                       
                        if($request->payment_method == "check/po"){
                
                        Mail::to($request->email)->send(new \App\Mail\SignUpMail($details));
                        Mail::to($request->assistant_coach_email_address)->send(new \App\Mail\SignUpMail($details));
                        Mail::to($request->billing_email_address)->send(new \App\Mail\SignUpMail($details));

                        // ->cc($request->assistant_coach_email_address)
                        // ->bcc($request->billing_email_address)
                
                
                        }
            
                            $usercoach->save();



                            
            
                          $user = new User;
            
                    // if ($request->hasfile('image')) {
                    //     $file = $request->file('image');
                    //     $imageName = time() . '-' . $file->getClientOriginalName();
                    //     $file->move('/public/images/', $imageName);
                    // $user->image =   $imageName;}
            
                        
                        $user->user_name = $request->student_username;
            
                        $user->school_email_address = $request->school_email_address;
            
                        // $user->email = $request->email;
            
                        $user->assistant_coach_email_address = $request->assistant_coach_email_address;
            
                        $user->billing_email_address = $request->billing_email_address;
            
                        $user->school_phone_no = $request->school_phone_no;
            
                        $user->billing_phone_no = $request->billing_phone_no;
            
                        $user->school_name = $request->school_name;
            
                        $user->name = $request->name;
            
                        $user->school_address = $request->school_address;
            
                        $user->assistant_coach_name = $request->assistant_coach_name;
                        $user->school_city = $request->school_city;
            
                        $user->personal_phone_no = $request->personal_phone_no;
                        $user->school_state = $request->school_state;
            
                        $user->school_zip_code = $request->school_zip_code;
            
                        $user->billing_contact_name = $request->billing_contact_name;
            
                        $user->billing_email_address = $request->billing_email_address;
            
                        $user->billing_phone_no = $request->billing_phone_no;
                        
                        $usercoach->payment_method = $request->payment_method;
                        
                        $user->password = Hash::make($request->student_password);
            
                        $user->role = 'student';
            
                          $user->save();
            
                       $coach_id= $usercoach->id;
                       $student_id = $user->id;
            
                       $coach_student= new CoachStudent();
               
                       $coach_student->coach_id = $coach_id;
                      $coach_student->student_id = $student_id;
            
                       $coach_student->save();
                        
                        return redirect('login')->with('success','You have been registered successfully');
            

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
        public function loginUser(Request $request)
        {   
            $input = $request->all();
            $this->validate($request, [
                'user_name' => 'required',
                'password' => 'required',
            ]);
      
            $fieldType = filter_var($request->user_name, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

       
            // $remember_me = $request->has('remember_me') ? true : false; 
           
            if(auth()->attempt(array($fieldType => $input['user_name'], 'password' => $input['password'])))

            { 
                if(Auth::check()){

                if (Auth::user()->role == 'admin' ) {
                    return redirect('admin/users')->with('success', 'Welcome Admin');

                
                    }elseif(Auth::user()->role =='coach'){
        
                        return redirect('coach/students')->with('success', 'Welcome Coach');
                    }
                    elseif(Auth::user()->role =='student'){
        
                        return redirect('student/dashboard')->with('success','welcome Student');

                    } 

                   
                }
              
                
            }
            else
            {
                return redirect('login')->with('error','Invalid Credentials.');
                   
            }

            }
              
          public function logout(Request $request)

        {

            Auth::logout();        
            return redirect('login');
        }
        

       public function importData(Request $request){

           set_time_limit(0);

            $this->validate($request, [
                'uploaded_file' => 'required|file|mimes:xls,xlsx'
            ]);
            $the_file = $request->file('uploaded_file');
            try{
                $spreadsheet = IOFactory::load($the_file->getRealPath());
                $sheet        = $spreadsheet->getActiveSheet();
                $row_limit    = $sheet->getHighestDataRow();
                $column_limit = $sheet->getHighestDataColumn();
                $row_range    = range( 3, $row_limit );
                $column_range = range( 'F', $column_limit );
                $startcount = 2;
                $data = array();
                foreach ( $row_range as $row ) {
                    // $data = [
                    //     'name' =>$sheet->getCell( 'A' . $row )->getValue(),
                    //     'personal_phone_no' => $sheet->getCell( 'B' . $row )->getValue(),
                    //     'school_address' => $sheet->getCell( 'W' . $row )->getValue(),
                    //     'school_city' => $sheet->getCell( 'D' . $row )->getValue(),
                    //     'school_zip_code' => $sheet->getCell( 'E' . $row )->getValue(),
                    //     'school_state' =>$sheet->getCell( 'F' . $row )->getValue(),
                    //     'user_name' => $sheet->getCell( 'N' . $row )->getValue(),
                    //     'password' => $sheet->getCell( 'O' . Hash::make($row->getValue())),
                    // ];
                    /// SAVE COACH DATA
                    ///
                    $coachUsername=$sheet->getCell( 'W' . $row )->getValue();
                    $password=Hash::make($sheet->getCell('X'.$row)->getValue());
                    $name = $sheet->getCell( 'J' . $row )->getValue();
                    $schoolName = $sheet->getCell( 'B' . $row )->getValue();
                    $schoolState = $sheet->getCell( 'E' . $row )->getValue();
                    $schoolAddress = $sheet->getCell( 'C' . $row )->getValue();
                    $schoolCity = $sheet->getCell( 'D' . $row )->getValue();
                    $schoolZip = $sheet->getCell( 'F' . $row )->getValue();
                    $schoolPhone = $sheet->getCell( 'N' . $row )->getValue();
                    // $schoolState = $sheet->getCell( 'G' . $row )->getValue();
                    $startDate = $sheet->getCell('AL' . $row )->getFormattedValue();

                 
                    $endDate = $sheet->getCell( 'H' . $row )->getFormattedValue();     
                                        
                    $amount = $sheet->getCell( 'AM' . $row )->getValue();
                    $payMethod = $sheet->getCell( 'AN' . $row )->getValue();
                    $cheque = $sheet->getCell( 'AO' . $row )->getValue();
                        
                    $email = $sheet->getCell( 'M' . $row )->getValue();
                    $schoolEmailAddress = $sheet->getCell( 'L' . $row )->getValue();
                    $assistantCoachEmailAddress = $sheet->getCell( 'R' . $row )->getValue();
                    $assistantCoachName = $sheet->getCell( 'P' . $row )->getValue();

                    $billingContactName = $sheet->getCell( 'AC' . $row )->getValue();

                    // $billingContactName = $sheet->getCell( 'R' . $row )->getValue();

                    $billingContactEmail = $sheet->getCell( 'AF' . $row )->getValue();

                        $vaultAccess = $sheet->getCell( 'AA' . $row )->getValue();
                   
                    $student_username= $sheet->getCell( 'Y' . $row )->getFormattedValue();

                
                   $student_password=Hash::make($sheet->getCell('Z'.$row)->getValue());
                    // $school_city = $sheet->getCell( 'D' . $row )->getValue();

                    $new_coach = new User;
                    $new_coach->user_name= $coachUsername;
                    $new_coach->password= $password;
                    $new_coach->school_city= $schoolCity;
                    $new_coach->name= $name;
                    $new_coach->school_name= $schoolName;
                    $new_coach->school_state= $schoolState;
                    $new_coach->school_address= $schoolAddress;
                    $new_coach->billing_contact_name= $billingContactName;
                    $new_coach->billing_email_address= $billingContactEmail;
                    $new_coach->vault_access= ($vaultAccess == 'Yes') ? 1 : 0;
                    $new_coach->school_zip_code= $schoolZip;
                    $new_coach->school_phone_no= $schoolPhone;
                    // $new_coach->school_phone_no= $schoolPhone;
                    $new_coach->email= $email;
                    $new_coach->payment_method = $payMethod;
                    $new_coach->school_email_address= $schoolEmailAddress;
                    $new_coach->assistant_coach_email_address =  $assistantCoachEmailAddress;
                    $new_coach->assistant_coach_name =  $assistantCoachName;

                    $new_coach->role='coach';

                    $new_coach->save();

                    $new_coach_id=  $new_coach->id;

                    $new_student=  new User;
                    $new_student->user_name= $student_username;
                    $new_student->password=$student_password;
                    $new_student->school_city=$schoolCity;
                    $new_student->school_name= $schoolName;
                    $new_student->school_state= $schoolState;
                    $new_student->school_address= $schoolAddress;
                    $new_student->school_zip_code= $schoolZip;
                    $new_student->school_phone_no= $schoolPhone;
                    // $new_student->school_phone_no= $schoolPhone;
                    $new_student->billing_contact_name= $billingContactName;
                    $new_student->billing_email_address= $billingContactEmail;
                    $new_student->assistant_coach_email_address =  $assistantCoachEmailAddress;
                    $new_student->assistant_coach_name =  $assistantCoachName;
                    $new_student->vault_access= "1";
                    $new_student->role='student';
                    $new_student->save();

                    $new_student_id=  $new_student->id;

                    $coach_student=new CoachStudent;
                    $coach_student->coach_id= $new_coach_id;
                    $coach_student->student_id= $new_student_id;
                    $coach_student->save();

                    $coachMembership = new Membership;

                    $coachMembership->user_id =  $new_coach_id;
                    $coachMembership->amount =  $amount;
                    $newDate = date('Y-m-d H:i:s', strtotime($startDate));

                    $coachMembership->start_date =  date('Y-m-d H:i:s', strtotime($startDate));
                    $coachMembership->end_date =  date('Y-m-d H:i:s', strtotime($endDate));
                    $coachMembership->payment_mode =  $payMethod;
                    $coachMembership->status =  "1";
                    // $coachMembership->paypal_transaction_id =  ($cheque == "Credit Card") ? 'Credit Card' : '';
                    // $coachMembership->cheque_number =  ($cheque != "Credit Card") ? $cheque : '';
                    $coachMembership->cheque_number = $cheque;

                    
                    $coachMembership->save();

                    
                    //// SAVE STUDENT DATA
                    // $startcount++;
                }
                // echo "<pre>"; print_r($data); echo "</pre>";
                // exit;
                // DB::table('users')->insert($data);
            } catch (Exception $e) {
                // $error_code = $e->errorInfo[1];
                return redirect()->back()->withErrors('There was a problem uploading the data!');
            }
            return redirect()->back()->withSuccess('Great! Data has been successfully uploaded.');
        }

        public function ExportExcel($customer_data){
            ini_set('max_execution_time', 0);
            ini_set('memory_limit', '4000M');
            try {
                $spreadSheet = new Spreadsheet();
                $spreadSheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
                $spreadSheet->getActiveSheet()->fromArray($customer_data);
                $Excel_writer = new Xls($spreadSheet);
                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="Customer_ExportedData.xls"');
                header('Cache-Control: max-age=0');
                ob_end_clean();
                $Excel_writer->save('php://output');
                exit();
            } catch (Exception $e) {
                return;
            }
     
        }
         public function exportData(){
            // $data = User::where('role','coach')->with('student','membership')->get();   

            $data =  DB::table('users')
                ->select("users.*","coach_student.student_id","membership.start_date","membership.end_date","membership.amount","states.name as statename")
                ->leftJoin('coach_student', 'users.id', '=', 'coach_student.coach_id')
                ->leftJoin('membership','membership.user_id','=','users.id')
                ->leftJoin('states','states.state_abb','=','users.school_state')
                ->where('users.role','=','coach')
                ->where('membership.start_date', '<=', Carbon::now())
                ->where('membership.end_date', '>=', Carbon::now())
                ->get();

//   dd($data);    
           
            // echo "<pre>"; print_r((($data))->toArray()); echo "</pre>"; exit;
                       
            $data_array [] = array("School Address","School City","School Zip Code","School State", "Registration Date", "Expiration Date","School Name","Head Coach Name","Head Coach Personal Email","Head Coach School Email","Head Coach School Phone No", "Assistant Coach Name","Assistant Coach Email","Billing Contact Email","Billing Contact Name", "Coach UserID","Student UserID", "Vault Access To Student", "Amount Paid","Payment Method");
            foreach($data as $data_item)
            {
                $student =  DB::table('users')->where('id',$data_item->student_id)->get();
                
                $data_array[] = array(
                    // 'Name' =>$data_item->name,
                    // 'Personal PhoneNo' => $data_item->personal_phone_no,
                    'School Address' => $data_item->school_address ?? "",
                    'School City' => $data_item->school_city ?? "",
                    'School Zip Code' => $data_item->school_zip_code ?? "",
                    'School State' =>$data_item->statename ?? "",                   
                    'Registration Date' => $data_item->start_date ?? "" ,                 
                    'Expiration Date' =>$data_item->end_date ?? "" ,
                    'School Name' =>$data_item->school_name ?? "",
                    'Head Coach Name' =>$data_item->name ??"",         
                    'Head Coach Personal Email' =>$data_item->email ?? "",
                    'Head Coach School Email' =>$data_item->school_email_address ?? "",
                    'Head Coach School Phone No' =>$data_item->school_phone_no ?? "",
                    'Assistant Coach Name' =>$data_item->assistant_coach_name ?? "",
                    'Assistant Coach Email' =>$data_item->assistant_coach_email_address ?? "",
                    'Billing Contact Email' =>$data_item->billing_email_address ?? "",
                    'Billing Contact Name' =>$data_item->billing_contact_name ?? "",
                    'Coach UserID' =>$data_item->user_name ?? "",
                    'Student UserID' =>$student[0]->user_name ?? "" ,
                    'Vault Access To Student' =>($data_item->vault_access == 1 ? 'yes': "no"),
                    'Amount Paid' =>$data_item->amount ?? "" ,
                    'Payment Method' =>$data_item->payment_method ?? "",


                );
            }
            
            $this->ExportExcel($data_array);
        }
        
       
    
    
    }
      

