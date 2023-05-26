<?php

namespace App\Http\Controllers;

use App\Models\CoachStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\states;
use App\Models\users_guide;
use App\Models\offerPrice;
use App\Models\TopicRole;
use App\Models\User;
use App\Models\ISG;
use App\Models\category;
use App\Models\categoryLinks;
use App\Models\awards;
use App\Models\Extemp;
use App\Models\Membership;

use App\Models\Theme;
use App\Models\Data;
use App\Models\ExtempTopic;
use Illuminate\Support\Facades\DB;
use App\Models\playCategory;
use App\Models\Reviews;
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

      
        // $request->validate([
        //     'personal_phone_no'   =>  [
        //         'numeric',
        //         'required',
        //         'digits:10',
        //          Rule::unique('users')->ignore($studentid),
        //     ],
        //     'email'   =>  [
        //         'required',
        //         Rule::unique('users')->ignore($studentid),

        //     ],
        //     'name'   =>  [
        //         'required',
        //     ],
        //     'school_city'   =>  [
        //         'required',
        //     ],
            

        // ]);

        

        $student->student->name =   $request->input('name');

        $student->student->email =   $request->input('email');
        $student->student->personal_phone_no =   $request->input('personal_phone_no');
        $student->student->school_city =   $request->input('school_city');
        $student->student->password = Hash::make($request->password);

        $student->student->update();

        
      return redirect('coach/students')->with('success','Student Updated successfully');

    }
    public function DeleteStudent($id)

    {
     

          User::where('id', $id)->delete();
          CoachStudent::where('student_id',$id)->delete();
         
       
        return redirect()->back()->with('success', 'Student Deleted Successfully');


    }

    public function demoSearch(Request $request)
    {
        $awards = awards::all();
        $theme = Theme::all();
        $category = playCategory::all();

        $title = $request["title"];
        $author = trim($request["author"]);
        $type = $request["type"];
        $characters = $request["characters"];
        $award = $request["award_name"];
        $themes = $request["theme_name"];
        $categories = $request["category_name"];
        $fullSearch = $request["wide_search"];
        $today = date('Y-m-d H:i:s');
        // echo $today;
        $coachID = Auth::user()->id;
        $membership = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
        ->whereDate('end_date', '>=', $today)->where('status',1)
        ->first();
    
        // $pendingsession = 3;
        // if (count($request->all()) > 0) {
        //     if ($request->session()->has("search_count")) {
        //         $pendingsession = $request->session()->get("search_count");
        //         if ($pendingsession > 0) {
        //             $request
        //                 ->session()
        //                 ->put("search_count", $pendingsession - 1);
        //             $request->session()->save();
        //             $pendingsession = $request->session()->get("search_count");
        //         }
        //     } else {
        //         $request->session()->put("search_count", 3);
        //         $request->session()->save();
        //     }
        // } else {
        //     if (!$request->session()->has("search_count")) {
        //         $request->session()->put("search_count", 3);
        //         $request->session()->save();
        //         $pendingsession = $request->session()->get("search_count");
        //     }
        // }

        //Make author search by last name+first name
        $authorname = implode(" ", array_reverse(explode(" ", $author)));
        if ($fullSearch != null) {
            $search = Data::select(
                "data.*",
                DB::raw("group_concat(award_id) as award_id")
            )
                ->orwhere("title", "Like", "%" . $fullSearch . "%")
                ->orwhere("publisher", "Like", "%" . $fullSearch . "%")
                ->orwhere("isbn", "Like", "%" . $fullSearch . "%")

                ->orwhere("author", "Like", "%" . $fullSearch . "%")
                ->orwhere("type", "Like", "%" . $fullSearch . "%")
                ->orwhere("characters", "Like", $fullSearch)
                ->orWhereHas('theme', function ($query) use ($fullSearch) {
                                $query->where('name', 'like', '%' . $fullSearch . '%');
                            })
                 ->orWhereHas('awards', function ($query) use ($fullSearch) {
                                $query->where('awards_name', 'like', '%' . $fullSearch . '%');
                            })
                  ->orWhereHas('category', function ($query) use ($fullSearch) {
                                $query->where('name', 'like', '%' . $fullSearch . '%');
                            })

                
                ->groupBy("category_id")
    
               ->get();
   
        //            echo "<pre>"; print_r($data->toArray()); echo "</pre>";
        //    exit;

            } else
             {
                
                $search = Data::select(
                    "data.*",
                    DB::raw("group_concat(award_id) as award_id")
                )
                    ->where("title", "Like", "%" . $title . "%")
                    ->where("author", "Like", "%" . $authorname . "%")
                    ->where("type", "Like", "%" . $type . "%")
                    ->where("characters", "Like", $characters)
                    ->when($award, function ($q) use ($request) {
                        return $q->whereHas("awards", function ($query) use ($request) {
                            $query->where("id", $request->award_name);
                        });
                    })
                    ->when($themes, function ($q) use ($request) {
                        return $q->whereHas("theme", function ($query) use ($request) {
                            $query->where("id", $request->theme_name);
                        });
                    })
                    ->when($categories, function ($q) use ($request) {
                        return $q->whereHas("category", function ($query) use (
                            $request
                        ) {
                            $query->where("id", $request->category_name);
                        });
                    })
                    ->groupBy("category_id")
        
                    ->get();


               }      

        //    echo "<pre>"; print_r($search->toArray()); echo "</pre>";
        //    exit;
        return view(
            "Coaches.search",
            compact(
                "awards",
                "award",
                "theme",
                "themes",
                "fullSearch",
                "category",
                "categories",
                "search",
                "title",
                "author",
                "type",
                "characters",
                "membership"
                // "pendingsession"
            )
        );
    }
    public function demoSearchPost(Request $request)
    {
        $awards = awards::all();
        $theme = Theme::all();
        $category = playCategory::all();

        $title = $request["title"];
        $author = trim($request["author"]);
        $type = $request["type"];
        $characters = $request["characters"];
        $award = $request["award_name"];
        $themes = $request["theme_name"];
        $categories = $request["category_name"];
        $fullSearch = $request["wide_search"];


        // $coachId = Auth::user()->id;
        // $studentID = Auth::user()->id;


        if (Auth::user()->role == "coach"){

        $today = date('Y-m-d H:i:s');
        // echo $today;
        $coachID = Auth::user()->id;
        $membership = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
        ->whereDate('end_date', '>=', $today)->where('status',1)
        ->first();

        //          echo "<pre>"; print_r($membership); echo "</pre>";
        //    exit;
        }

        if (Auth::user()->role == "student"){

        
            $today = date('Y-m-d H:i:s');
            $studentID = Auth::user()->id;
            $coachStudent = User::where('id',$studentID)->get();
            //  $vaultAccessToStudentID = $coachStudent[0]->vault_access;
             $studentDetails = CoachStudent::where('student_id',$studentID )->get();   
             
        //          echo "<pre>"; print_r($studentDetails->toArray()); echo "</pre>";
        //    exit;
            $coachID =     $studentDetails[0]->coach_id;
            $membership = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
            ->whereDate('end_date', '>=', $today)->where('status',1)
            ->first();
            
        }
        // echo $membership; exit;


        // $pendingsession = 3;
        // if (count($request->all()) > 0) {
        //     if ($request->session()->has("search_count")) {
        //         $pendingsession = $request->session()->get("search_count");
        //         if ($pendingsession > 0) {
        //             $request
        //                 ->session()
        //                 ->put("search_count", $pendingsession - 1);
        //             $request->session()->save();
        //             $pendingsession = $request->session()->get("search_count");
        //         }
        //     } else {
        //         $request->session()->put("search_count", 3);
        //         $request->session()->save();
        //     }
        // } else {
        //     if (!$request->session()->has("search_count")) {
        //         $request->session()->put("search_count", 3);
        //         $request->session()->save();
        //         $pendingsession = $request->session()->get("search_count");
        //     }
        // }

        //Make author search by last name+first name
        $authorname = implode(" ", array_reverse(explode(" ", $author)));
        if ($fullSearch != null) {
            $search = Data::select(
                "data.*",
                DB::raw("group_concat(award_id) as award_id")
            )
                ->orwhere("title", "Like", "%" . $fullSearch . "%")
                ->orwhere("publisher", "Like", "%" . $fullSearch . "%")
                ->orwhere("isbn", "Like", "%" . $fullSearch . "%")

                ->orwhere("author", "Like", "%" . $fullSearch . "%")
                ->orwhere("type", "Like", "%" . $fullSearch . "%")
                ->orwhere("characters", "Like", $fullSearch)
                ->orWhereHas('theme', function ($query) use ($fullSearch) {
                                $query->where('name', 'like', '%' . $fullSearch . '%');
                            })
                 ->orWhereHas('awards', function ($query) use ($fullSearch) {
                                $query->where('awards_name', 'like', '%' . $fullSearch . '%');
                            })
                  ->orWhereHas('category', function ($query) use ($fullSearch) {
                                $query->where('name', 'like', '%' . $fullSearch . '%');
                            })

                
                ->groupBy("category_id")
    
               ->get();
   
        //            echo "<pre>"; print_r($data->toArray()); echo "</pre>";
        //    exit;

            } else
             {
                $search = Data::select(
                    "data.*",
                    DB::raw("group_concat(award_id) as award_id")
                )
                    ->where("title", "Like", "%" . $title . "%")
                    ->where("author", "Like", "%" . $authorname . "%")
                    ->where("type", "Like", "%" . $type . "%")
                    ->where("characters", "Like", $characters)
                    ->when($award, function ($q) use ($request) {
                        return $q->whereHas("awards", function ($query) use ($request) {
                            $query->where("id", $request->award_name);
                        });
                    })
                    ->when($themes, function ($q) use ($request) {
                        return $q->whereHas("theme", function ($query) use ($request) {
                            $query->where("id", $request->theme_name);
                        });
                    })
                    ->when($categories, function ($q) use ($request) {
                        return $q->whereHas("category", function ($query) use (
                            $request)
                         {
                            $query->where("id", $request->category_name);
                        });
                    })
                    ->groupBy("category_id")
        
                    ->get();


               }      

        //    echo "<pre>"; print_r($search->toArray()); echo "</pre>";
        //    exit;
        return view(
            "Coaches.search",
            compact(
                "awards",
                "award",
                "theme",
                "themes",
                "fullSearch",
                "category",
                "categories",
                "search",
                "title",
                "author",
                "type",
                "characters",
                "membership"
                // "pendingsession"
            )
        );
    }

 public function demoSearchPrint(Request $request){

       
     $title = $request["title"];
        $author = trim($request["author"]);
        $type = $request["type"];
        $characters = $request["characters"];
        $award = $request["award_name"];
        $themes = $request["theme_name"];
        $categories = $request["category_name"];
        $fullSearch = $request["wide_search"];
        $printSelectedDataByIDs = $request->printBox;
        //dd($printSelectedDataByIDs);
        $authorname = implode(" ", array_reverse(explode(" ", $author)));

      if(count($printSelectedDataByIDs)>0){

    $search = Data::select(
        "data.*",
        DB::raw("group_concat(award_id) as award_id")
    )
        ->where("title", "Like", "%" . $title . "%")
        ->where("author", "Like", "%" . $authorname . "%")
        ->where("type", "Like", "%" . $type . "%")
        ->where("characters", "Like", $characters)
        ->whereIn('id', $printSelectedDataByIDs)
        ->when($award, function ($q) use ($request) {
            return $q->whereHas("awards", function ($query) use ($request) {
                $query->where("id", $request->award_name);
            });
        })
        ->when($themes, function ($q) use ($request) {
            return $q->whereHas("theme", function ($query) use ($request) {
                $query->where("id", $request->theme_name);
            });
        })
        ->when($categories, function ($q) use ($request) {
            return $q->whereHas("category", function ($query) use (
                $request
            ) {
                $query->where("id", $request->category_name);
            });
        })
        ->groupBy("category_id")

        ->get();



       // dd($search);
        return view(
            "Coaches.printsearch",
            compact(
                // "awards",
                "award",
                // "theme",
                "themes",
                "fullSearch",
                // "category",
                "categories",
                "search",
                "title",
                "author",
                "type",
                "characters",
                // "pendingsession"
            )
        );
    
     }
        
    }

    public function printDomesticTopic(){

        $allDomesticTopics = Extemp::where('type','domestic')->with('topic')->get();
        return view(
            "Coaches.printdomestictopic",
            compact(
                "allDomesticTopics",         
            )
        );

    }

    public function printForiegnTopic(){

        $allForeignTopics = Extemp::where('type','foreign')->with('topic')->get();

        return view(
            "Coaches.printforiegntopic",
            compact(
                "allForeignTopics",         
            )
        );

    }

    public function vaultAccess(){
    
        return view("Coaches.vaultaccess", );
           
    }
    public function vaultAccessToStudent(Request $request){

        $coachId = Auth::user()->id;
        $vaultAccessCoachId = CoachStudent::where('coach_id',$coachId)->get();

        // echo "<pre>"; print_r(($vaultAccessCoachId)->toArray()); exit;
        $studentId = $vaultAccessCoachId[0]->student_id;
        $coachId = $vaultAccessCoachId[0]->coach_id;

        $student =  User::find($studentId);
        $student->vault_access = $request->vault_access;

        $student->update();

        $coach =  User::find($coachId);
        $coach->vault_access = $request->vault_access;

        $coach->update();


        return redirect('coach/vault')->with('success','Vault access updated successfully');
      
    }

}
