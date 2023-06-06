<?php

namespace App\Http\Controllers;
use App\Models\ExtempTopic;
use App\Models\Extemp;
use App\Models\Data;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ExtempController extends Controller
{
    public function index(){
       
    $topic = ExtempTopic::paginate(10);
   return view('admin.Data.extemptopics',compact('topic'));
        
    }
    public function addExtempTopics(){
       return view('admin.Data.addextemptopics');
               
           }


        //    public function deleteExtempData($id){
                    
        //         $data = Data::find($id);

        //         $data->delete();

        //         return redirect()->back()->with('error', "Data deleted successfully");

        //    }
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
     public function viewExtemp(Request $request){
        $date = Extemp::groupBy('month','year')->orderBy('year', 'ASC')->orderBy('month', 'ASC')->get();
        $Topic = Extemp::groupBy('topic_id')->with('topic')->get();
        $monthName = array('01'=>'JAN','02'=>'FEB','03'=>'MAR','04'=>'APR','05'=>'MAY','06'=>'JUNE','07'=>'JULY','08'=>'AUG','09'=>'SEP','10'=>'OCT','11'=>'NOV','12'=>'DEC',);
        $dateselected = $request->date;
        $topicName = $request->topic_name;
        $topic = Extemp::with('topic');


         if($topicName != ""){
            $topic = Extemp::with('topic')->where('topic_id',$topicName );
             }
         if($dateselected != ""){

             $topic->where('month','=',trim(explode(' ', $dateselected)[0]));
             $topic->where('year','=',trim(explode(' ', $dateselected)[1]));

            }
                               
          $topic =   $topic->paginate(10);

           return view('admin.Data.extemp',compact('topic','date','Topic','dateselected','monthName','topicName'));
               
        }

        public function viewExtempPost(Request $request){

          
            $date = Extemp::groupBy('month','year')->orderBy('year', 'ASC')->orderBy('month', 'ASC')->get();
            $Topic = Extemp::groupBy('topic_id')->with('topic')->get();
            $monthName = array('01'=>'JAN','02'=>'FEB','03'=>'MAR','04'=>'APR','05'=>'MAY','06'=>'JUNE','07'=>'JULY','08'=>'AUG','09'=>'SEP','10'=>'OCT','11'=>'NOV','12'=>'DEC',);
            $dateselected = $request->date;
            $topicName = $request->topic_name;
            $topic = Extemp::with('topic');
    
    
             if($topicName != ""){
                $topic = Extemp::with('topic')->where('topic_id',$topicName );
                 }
             if($dateselected != ""){
    
                 $topic->where('month','=',trim(explode(' ', $dateselected)[0]));
                 $topic->where('year','=',trim(explode(' ', $dateselected)[1]));
    
                }
                                   
              $topic =   $topic->paginate(3);
              $topic->appends($request->only(['topic_name', 'date']));
    
               return view('admin.Data.extemp',compact('topic','date','Topic','dateselected','monthName','topicName'));
                   
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

            return redirect('admin/extempview')->with('success', 'Data Added successfully');

                   
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
        
                    return redirect('admin/extempview')->with('success', 'Data Updated successfully');
        
                           
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
                             $row_range    = range( 2, $row_limit );
                             $column_range = range( 'F', $column_limit );
                             $startcount = 2;
                             $data = array();
                             foreach ( $row_range as $row ) {   
                                 
                                 $type = $sheet->getCell( 'A' . $row )->getValue();  
                                                                                 
                                 $question = $sheet->getCell( 'B' . $row )->getValue();   
                                 $year = $sheet->getCell( 'D' . $row )->getValue();   
                                $month = $sheet->getCell( 'C' . $row )->getValue();


                                $topic_name = $sheet->getCell( 'E' . $row )->getValue();   
                                
                                $topicArray = ExtempTopic::where('name', trim($topic_name))->get();

                               
                            
                                 
                                 $extempTopic = new Extemp;               
                                 $extempTopic->type= $type;               
                                 $extempTopic->question= $question;  
                                 $extempTopic->month= $month;             

                                 $extempTopic->year= $year;     
                                 
                                
                                 if(($topicArray->count()) > 0 ){

                                    $extempTopic->topic_id= $topicArray['0']['id'];  

                                    }else{

                                        $extempTopicName = new ExtempTopic;

                                        $extempTopicName->name = $topic_name;
                                       $extempTopicName->save();

                                     

                                        $extempTopic->topic_id = $extempTopicName->id;
                                    }
                            

                                
            

                                 $extempTopic->save();
                              
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
}