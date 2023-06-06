<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\states;
use App\Models\users_guide;
use App\Models\offerPrice;
use App\Models\TopicRole;
use App\Models\User;

use App\Models\ISG;
use App\Models\Membership;
use App\Models\CoachStudent;


use App\Models\category;
use App\Models\categoryLinks;
use App\Models\SubscribeUs;

use App\Models\awards;
use App\Models\Extemp;
use App\Models\Theme;
use App\Models\Data;
use App\Models\ExtempTopic;
use Illuminate\Support\Facades\DB;
use App\Models\playCategory;
use App\Models\Reviews;
use App\Models\Tutorial;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
class HomeController extends Controller
{
    public function aboutUs()
    {
        return view("frontendviews.aboutUs");
    }

    public function index()
    {
        return view("frontendviews.home");
    }

    public function faq()
    {
        return view("frontendviews.faq");
    }


    public function freeResources()
    {
        $resources = category::all();

        return view("frontendviews.freeresources", compact('resources'));
    }

    public function getResources(Request $request)
    {
        $catid = $request->cat_id;
    
                if($catid){

                    $catlinks = DB::table('categories')
                    ->leftJoin('category_links', 'categories.id', '=', 'category_links.catid')
                    ->where('categories.id','=',$catid)
                    ->get();
                    // $catlinks = categoryLinks::where('catid', $catid)->with('category')->get();
                // echo "<pre>"; print_r($catlinks); echo "</pre>";
                // exit;
                    return view('frontendviews.links',compact(['catlinks',"catid"]));
                }
    }
    public function Home()
    {
        $day = Carbon::now();

        $today = $day->toDateString();

        $offerPrice = offerPrice::where("status", 1)->get();

        return view("frontendviews.home", compact("offerPrice", "today"));
    }

    public function contactUs()
    {
        return view("frontendviews.contactUs");
    }

    public function documents()
    {
        $document =   users_guide::where("name", "Like", "%" ."Price Quote". "%")
        ->orwhere("name", "Like", "%" ."W-9". "%")
        ->orwhere("name", "Like", "%" ."VPAT". "%")
        ->orwhere("name", "Like", "%" ."Sole Source". "%")
        ->orwhere("name", "Like", "%" ."Privacy Policy/Terms ". "%")
        ->get();

        
// dd($document);

        return view("frontendviews.documents", compact("document"));
    }
    public function register()
    {
        $states = states::all();
        return view("frontendviews.register", compact("states"));
    }
    public function school()
    {
        $stateAJ = states::where("name", "regexp", "^[a-jA-J]")
            ->orderBy("name")
            ->take(10)
            ->get();
        $stateKN = states::where("name", "regexp", "^[k-nK-N]")
            ->orderBy("name")
            ->take(10)
            ->get();
        $stateOZ = states::where("name", "regexp", "^[o-zO-Z]")
            ->orderBy("name")
            ->take(10)
            ->get();

        return view(
            "frontendviews.school",
            compact(["stateAJ", "stateKN", "stateOZ"])
        );
    }
    public function tutorial()
    {

        $videos = Tutorial::limit(3)->orderBy('updated_at','desc')->get();
        
        return view("frontendviews.tutorial", compact('videos'));
    }
    public function services()
    {
        return view("frontendviews.services");
    }

    public function reviews()
    {
        $review = Reviews::where("approved", 1)
            ->with(["user"])
            ->get();
        return view("frontendviews.reviews", compact("review"));
    }

    public function adminViewReviews()
    {
        $review = Reviews::paginate(10);

        return view("admin.Reviews.reviews", compact("review"));
    }

    public function addreview(Request $request)
    {
        $request->validate([
            "comment" => "required",
        ]);

        $review = new Reviews();

        $review->comment = $request->comment;
        $review->user_id = Auth::user()->id;
        $review->save();

        return redirect()
            ->back()
            ->with("success", "Review added successfully");
    }

    public function addScreenshot(Request $request)
    {
        $request->validate([
            "screenshot" => "required",
        ]);

        $review = new Reviews();

        $request->hasfile("screenshot");
        $file = $request->file("screenshot");

        $screenshot = time() . "-" . $file->getClientOriginalName();
        $file->move("public/images/", $screenshot);

        $review->screenshot = $screenshot;
        $review->user_id = Auth::user()->id;
        $review->approved = 1;

        $review->save();

        return redirect()
            ->back()
            ->with("success", "Review screenshot added successfully");
    }

    public function approveReview($id)
    {
        $review = Reviews::find($id);

        $review->approved = 1;
        $review->save();

        return redirect()
            ->back()
            ->with("success", "Review approved successfully");
    }

    public function deleteReview($id)
    {
        $review = Reviews::find($id);

        // echo"<pre>"; print_r(($review)->toArray()); echo "</pre>"; exit;

        if ($review->screenshot != "") {
            unlink(public_path("images/" . $review->screenshot));
            $review->delete();

        }else{
            $review->delete();
        }
            return redirect()
                ->back()
                ->with("error", "Review deleted successfully");
            
            
        
    }

    public function getReviews()
    {
        $review = Reviews::paginate(10);

        return view("frontendviews.reviews", compact("review"));
    }

    public function login()
    {
        return view("frontendviews.login");
    }
    public function download($file)
    {
        $file_path = "public/images/" . $file;
        return response()->download($file_path);
    }

    public function offerPrice()
    {
        $offerPrice = offerPrice::paginate(10);

        return view("admin.offerprices.offerprice", compact("offerPrice"));
    }
    public function addofferPrice()
    {
        return view("admin.offerprices.addofferprice");
    }
    public function SaveofferPrice(Request $request)
    {
        $request->validate([
            "price" => "required|numeric",
            "offer_price" => "required|numeric",
            "from_date" => "required",
            "to_date" => "required",
            "description" => "required",
        ]);

        $offerPrice = new offerPrice();

        $offerPrice->price = $request->price;
        $offerPrice->offer_price = $request->offer_price;
        $offerPrice->from_date = $request->from_date;
        $offerPrice->to_date = $request->to_date;
        $offerPrice->status = $request->status;

        $offerPrice->description = $request->description;
        $offerPrice->save();

        return redirect("admin/offerprice")->with(
            "success",
            "Offer Added successfully"
        );
    }

    public function editofferPrice($id)
    {
        $editOfferPrice = offerPrice::find($id);

        return view(
            "admin.offerprices.editofferprice",
            compact("editOfferPrice")
        );
    }
    public function updateofferPrice(Request $request, $id)
    {
        $request->validate([
            "price" => "required|numeric",
            "offer_price" => "required|numeric",
            "from_date" => "required",
            "to_date" => "required",
            "description" => "required",
        ]);

        $updateOfferPrice = offerPrice::find($id);
        $updateOfferPrice->price = $request->input("price");
        $updateOfferPrice->offer_price = $request->input("offer_price");
        $updateOfferPrice->from_date = $request->input("from_date");
        $updateOfferPrice->to_date = $request->input("to_date");
        // $updateOfferPrice->status = $request->input("status");
        $updateOfferPrice->description = $request->input("description");
        $updateOfferPrice->update();

        return redirect("admin/offerprice")->with(
            "success",
            "Offer Updated successfully"
        );
    }
    public function deleteOffer($id)
    {
        $deleteOffer = offerPrice::find($id);

        $deleteOffer->delete();
        return redirect()
            ->back()
            ->with("error", "Offer Deleted Successfully");
    }

    public function RandomTopics()
    {
        $location = TopicRole::where("name", "location")
            ->inRandomOrder()
            ->limit(3)
            ->get();
        $situation = TopicRole::where("name", "situation")
            ->inRandomOrder()
            ->limit(3)
            ->get();
        $character = TopicRole::where("name", "profession")
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view(
            "frontendviews.regeneratetopics",
            compact("location", "situation", "character")
        );
    }

    public function IsgTopicGenerator(Request $request)
    {
        $topicName = $request["topic_name"];
        $topic = DB::table("i_s_g_s")
            ->groupBy("topic")
            ->get();

        $info = DB::table("i_s_g_s")
            // ->select(DB::raw('group_concat(info) as info'))
            ->where("topic", $topicName)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        //         echo "<pre>"; print_r($info); echo "</pre>";
        //    exit;

        return view("frontendviews.isg", compact("topic", "topicName", "info"));
    }

    public function extempTopicGenerator(Request $request)
    {

       
        $topicListData ='';
        $allDomesticTopics ='';
        $allForeignTopics ='';   
        $domesticName = $request['topic_name_domestic'];
        $foriegnName = $request['topic_name_foriegn']; 
        $type = strtolower($request['doAction']);
        $allExtempQuestions =    $request['View All Extemp Questions'];
        $dateSelected = $request['date'];
        $monthName = array('01'=>'JAN','02'=>'FEB','03'=>'MAR','04'=>'APR','05'=>'MAY','06'=>'JUNE','07'=>'JULY','08'=>'AUG','09'=>'SEP','10'=>'OCT','11'=>'NOV','12'=>'DEC',);
        $today = date('Y-m-d H:i:s');
        // echo $today;
        $coachID = Auth::user()->id;
        $membership = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
        ->whereDate('end_date', '>=', $today)->where('status',1)
        ->first();
    //     if(Auth::user()->id = "student"){

    //     $today = date('Y-m-d H:i:s');

    //   $studentID = Auth::user()->id;
    // //   $coachStudent = User::where('id',$studentID)->get();
    // //    $vaultAccessToStudentID = $coachStudent[0]->vault_access;
    //    $studentDetails = CoachStudent::where('student_id',$studentID )->get();    
    //   $coachID =     $studentDetails[0]->coach_id;
    //   $membershipStudent = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
    //   ->whereDate('end_date', '>=', $today)->where('status',1)
    //   ->first();
    //     }
        $domesticTopic = Extemp::where('type','domestic')->with('topic')->groupBy('topic_id')->get();

        $foreignTopic = Extemp::where('type','foreign')->with('topic')->groupBy('topic_id')->get();

        $monthdate = Extemp::groupBy('month','year')->orderBy('year', 'ASC')->orderBy('month', 'ASC')->get();
       
        $topicData = DB::table('extemps')->leftJoin('extemp_topics', 'extemps.topic_id', '=', 'extemp_topics.id')->limit(3)->get();

        return view("frontendviews.extemptopic", compact('monthName','allDomesticTopics','membership','allForeignTopics','allExtempQuestions','type', 'allForeignTopics','allDomesticTopics', 'domesticTopic','foreignTopic','monthdate','domesticName','foriegnName','dateSelected', 'topicData') );
        //   echo "<pre>"; print_r($domesticTopicList->toArray()); echo "</pre>";
    //        exit;   
    }

    public function extempTopicGeneratorPost(Request $request){
        $allDomesticTopics ='';
        $allForeignTopics ='';
        $topicListData ='';
        $topicListData =''; 
        $domesticName = $request['topic_name_domestic'];
        $foriegnName = $request['topic_name_foriegn'];
        $both = $request['doBoth'];
        $all = $request['doAll'];
        $dateSelected = $request['date'];
        $type = strtolower($request['doAction']);
        $allExtempQuestions =$request['View All Extemp Questions'];
        $today = date('Y-m-d H:i:s');
        // echo $today;
        $coachID = Auth::user()->id;
        $membership = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
        ->whereDate('end_date', '>=', $today)->where('status',1)
        ->first();
        $today = date('Y-m-d H:i:s');
// if(Auth::user()->id = "student"){
//         $studentID = Auth::user()->id;
//       //   $coachStudent = User::where('id',$studentID)->get();
//       //    $vaultAccessToStudentID = $coachStudent[0]->vault_access;
//          $studentDetails = CoachStudent::where('student_id',$studentID )->get();    
//         $coachID =     $studentDetails[0]->coach_id;
//         $membershipStudent = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
//         ->whereDate('end_date', '>=', $today)->where('status',1)
//         ->first();
// }
        
        $monthName = array('01'=>'JAN','02'=>'FEB','03'=>'MAR','04'=>'APR','05'=>'MAY','06'=>'JUNE','07'=>'JULY','08'=>'AUG','09'=>'SEP','10'=>'OCT','11'=>'NOV','12'=>'DEC',);
        $domesticTopic = Extemp::where('type','domestic')->with('topic')->groupBy('topic_id')->get();
        $foreignTopic = Extemp::where('type','foreign')->with('topic')->groupBy('topic_id')->get();
        $monthdate = Extemp::groupBy('month','year')->orderBy('year', 'ASC')->orderBy('month', 'ASC')->get();
       
        $topicData = DB::table('extemps')->leftJoin('extemp_topics', 'extemps.topic_id', '=', 'extemp_topics.id')->limit(3)->inRandomOrder()->get();
        

        switch($request->input('doAction')){

           
            case 'Foreign':
                

                $topicListData = DB::table('extemps')->leftJoin('extemp_topics', 'extemps.topic_id', '=', 'extemp_topics.id')->where('extemps.type','=',$type)->where('extemps.topic_id','=',$foriegnName);

                if($request['date']){

                    $topicListData->where('extemps.month','=',trim(explode(' ', $dateSelected)[0]));
                    $topicListData->where('extemps.year','=',trim(explode(' ', $dateSelected)[1]));

                }
                               
                 $topicData =   $topicListData->limit(3)->inRandomOrder()->get();

            break;

            case 'Domestic':

                $topicListData = DB::table('extemps')->leftJoin('extemp_topics', 'extemps.topic_id', '=', 'extemp_topics.id')->where('extemps.type','=',$type)->where('extemps.topic_id','=',$domesticName);

                if($request['date']){

                    $topicListData->where('extemps.month','=',trim(explode(' ', $dateSelected)[0]));
                    $topicListData->where('extemps.year','=',trim(explode(' ', $dateSelected)[1]));

                }
                               
                $topicData =   $topicListData->limit(3)->inRandomOrder()->get();
             
            break;

            case 'View Questions From Both':

                $topicListData = DB::table('extemps')->leftJoin('extemp_topics', 'extemps.topic_id', '=', 'extemp_topics.id');

                if($request['date']){

                    $topicListData->where('extemps.month','=',trim(explode(' ', $dateSelected)[0]));
                    $topicListData->where('extemps.year','=',trim(explode(' ', $dateSelected)[1]));

                }
                               
                $topicData =   $topicListData->limit(3)->inRandomOrder()->get();
               
            break;

            case 'View All Extemp Questions':

                $allDomesticTopics = Extemp::where('type','domestic')->with('topic')->get();
                $allForeignTopics = Extemp::where('type','foreign')->with('topic')->get();
     
            break;

            default:
            $topicData = DB::table('extemps')->leftJoin('extemp_topics', 'extemps.topic_id', '=', 'extemp_topics.id')->limit(3)->inRandomOrder()->get();

            // $topicData = DB::table('extemps')->limit(3)->get();


        }


        return view("frontendviews.extemptopic", compact('topicData','membership','allExtempQuestions','allDomesticTopics','allForeignTopics','topicData','type', 'dateSelected','domesticName','foriegnName','monthName','domesticTopic','foreignTopic','monthdate'));

        
    }



    public function demoSearch(Request $request)
    {
        $awards = awards::all();
        $theme = Theme::all();
        $category = playCategory::all();

        $title = $request["title"];
        // $author = trim($request["author"]);
        $author = ($request["author"]);

        $type = $request["type"];
        $characters = $request["characters"];
        $award = $request["award_name"];
        $themes = $request["theme_name"];
        $categories = $request["category_name"];
        $fullSearch = $request["wide_search"];
        $vault = $request["vault"];


    
        $pendingsession = 3;
        if (count($request->all()) > 0) {
            if ($request->session()->has("search_count")) {
                $pendingsession = $request->session()->get("search_count");
                if ($pendingsession > 0) {
                    $request
                        ->session()
                        ->put("search_count", $pendingsession - 1);
                    $request->session()->save();
                    $pendingsession = $request->session()->get("search_count");
                }
            } else {
                $request->session()->put("search_count", 3);
                $request->session()->save();
            }
        } else {
            if (!$request->session()->has("search_count")) {
                $request->session()->put("search_count", 3);
                $request->session()->save();
                $pendingsession = $request->session()->get("search_count");
            }
        }

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
                            ->orWhereHas('files', function ($query) use ($fullSearch) {
                                $query->where('author_name', 'like', '%' . $fullSearch . '%');
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
                    ->where("author", "Like", "%" . $author . "%")
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
                    ->when($vault, function ($q) use ($request) {
                        return $q->whereHas("files", function ($query) use (
                            $request)
                         {
                            $query->where("author_name","Like", "%" . $request->vault . "%");
                        });
                    })
                    ->groupBy("category_id")
        
                    ->get();

                  
               }      

        //    echo "<pre>"; print_r($search->toArray()); echo "</pre>";
        //    exit;
        return view(
            "frontendviews.demosearch",
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
                "pendingsession",
                "vault"
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

    
        $pendingsession = 3;
        if (count($request->all()) > 0) {
            if ($request->session()->has("search_count")) {
                $pendingsession = $request->session()->get("search_count");
                if ($pendingsession > 0) {
                    $request
                        ->session()
                        ->put("search_count", $pendingsession - 1);
                    $request->session()->save();
                    $pendingsession = $request->session()->get("search_count");
                }
            } else {
                $request->session()->put("search_count", 3);
                $request->session()->save();
            }
        } else {
            if (!$request->session()->has("search_count")) {
                $request->session()->put("search_count", 3);
                $request->session()->save();
                $pendingsession = $request->session()->get("search_count");
            }
        }

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

            //    dd($search);
   
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
            "frontendviews.demosearch",
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
                "pendingsession"
            )
        );
    }


    public function joinUS(Request $request)
{

    $request->validate([

        
        "email" => "required",
        
    ]);

        $subscribeUs = new SubscribeUs;

        $subscribeUs->email = $request->email;

        $subscribeUs->save();

        return redirect()->back()->with('success','You have been subscribed successfully.');


}
   
}
