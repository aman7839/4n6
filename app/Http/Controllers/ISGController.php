<?php

namespace App\Http\Controllers;
use App\Models\ISG;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

use Illuminate\Http\Request;

class ISGController extends Controller
{
    //
    public function index(Request $request){

        $search = $request['search'];
        if ($search != ""){

            $topic = ISG::where('topic', 'Like', '%'.$search. '%' )->orWhere('info', 'Like', '%'.$search. '%')->paginate('30');
           
        }else{

        $topic = ISG::paginate(30);
    }

        return view('admin.Data.isg',compact('topic','search'));
    }
    public function saveIsg(Request $request){
        $request->validate([

            'topic'=> 'required',
            'info'=> 'required',
        ]);

        $topic =  new ISG;
        $topic->topic = $request->topic;
        $topic->info = $request->info;
        $topic->save();
        return redirect('admin/viewisg')->with('success','Record Added Successfully');
    }
    public function addIsg(){


        return view('admin.Data.addisg');
    }
    public function editIsg($id){

        $topic = ISG::find($id);
        return view('admin.Data.editisg', compact('topic'));
    }
    public function updateIsg(Request $request,$id){
        $request->validate([

            'topic'=> 'required',
            'info'=> 'required',
        ]);

        $topic = ISG::find($id);

        $topic->topic = $request->input('topic');
        $topic->info = $request->input('info');
        $topic->update();
        return redirect('admin/viewisg')->with('success','Record Updated Successfully');
    }
    public function deleteIsg($id){
        $topic = ISG::find($id);

        $topic->delete();
        return redirect()->back()->with('error','Record Deleted Successfuly',compact('topic'));
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
                 
                 $topic = $sheet->getCell( 'B' . $row )->getValue();    
                 
                
                 $info = $sheet->getCell( 'C' . $row )->getValue();   
                 
                 $isgTopic = new ISG;               
                 $isgTopic->topic= $topic;               
                 $isgTopic->info= $info;             
                 $isgTopic->save();
              
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
