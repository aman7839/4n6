<?php

namespace App\Http\Controllers;
use App\Models\ExtempTopic;
use App\Models\Extemp;


use Illuminate\Http\Request;

class ExtempController extends Controller
{
    public function index(){
 $topic = ExtempTopic::paginate(5);
return view('admin.Data.extemptopics',compact('topic'));
        
    }
    public function addExtempTopics(){
       return view('admin.Data.addextemptopics');
               
           }
           public function saveExtempTopics(Request $request){

            $request->validate([

                'name' => 'required',
            
            
            ]);


            $topic =  new ExtempTopic;
            $topic->name = $request->name;
            $topic->save();

            return redirect('admin/extemptopics')->with('success', 'Record Added successfully');
    }
    public function editExtempTopics($id){


        $topic = ExtempTopic::find($id);
        return view('admin.Data.editextemptopics',compact('topic'));
    }
   
            public function updateExtempTopics(Request $request,$id){
 
             $request->validate([
 
                 'name' => 'required',
             
             
             ]);
 
 
             $topic = ExtempTopic::find($id);
             $topic->name = $request->input('name');
             $topic->update();
 
             return redirect('admin/extemptopics')->with('success', 'Record Updated successfully');
     }
     public function viewExtemp(){
        $topic = Extemp::with('topic')->paginate(10);
       return view('admin.Data.extemp',compact('topic'));
               
           }
           public function saveExtemp(Request $request){

            $request->validate([
                'type' => 'required',
                'question' => 'required',

                'month' => 'required',

                'year' => 'required',
            ]);

            if($request->name){

                $topicName = new ExtempTopic;
                $topicName->name = $request->name;
                $topicName->save();

            }
            $topic =  new Extemp;

            $topic->type = $request->type;
            $topic->question = $request->question;

            $topic->topic_id = empty($request->name) ? $request->topic_id : $topicName->id;
            $topic->month = $request->month;

            $topic->year = $request->year;
            $topic->save();

            return redirect('admin/extemp')->with('success', 'Data Added successfully');

                   
               }
               public function addExtemp(){
                
                $topic = ExtempTopic::all();
               return view('admin.Data.addextemp',compact('topic'));
                       
                   }

                   public function editExtemp($id){

                    // $data = Data::where('id',$id)->with(['awards','theme','category'])->first();

                    $topic = Extemp::where('id',$id)->with(['topic'])->first();
                  $extemptopic = ExtempTopic::all();

                    return view('admin.Data.editextemp',compact('topic','extemptopic'));
                }
                public function updateExtemp(Request $request,$id){

                    $request->validate([
                        'type' => 'required',
                        'question' => 'required',
        
                        'topic_id' => 'required',
                        'month' => 'required',
        
                        'year' => 'required',
                    ]);
                    $topic =   Extemp::find($id);
        
                    $topic->type = $request->input('type');
                    $topic->question = $request->input('question');
        
                    $topic->topic_id = $request->input('topic_id');
                    $topic->month = $request->input('month');
        
                    $topic->year = $request->input('year');
                    $topic->update();
        
                    return redirect('admin/extemp')->with('success', 'Data Updated successfully');
        
                           
                       }
}