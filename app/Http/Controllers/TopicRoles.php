<?php

namespace App\Http\Controllers;

use App\Models\TopicRole;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;


class TopicRoles extends Controller
{
    //
    public function saveTopicRole(Request $request){
        $request->validate([

            'name'=> 'required',
            'info'=> 'required',
        ]);

        $topic = new TopicRole;

        $topic->name = $request->name;
        $topic->info = $request->info;
        $topic->save();

        return redirect('admin/topicroles')->with('success','Record Added Successfully');
    }

    public function TopicRole(){

        return view('admin.Data.topicroles');
    }
    public function ViewTopicRole(Request $request){
        $search = $request['search'];

        if ($search != ""){

            $topic = TopicRole::where('name', 'Like', '%'.$search. '%' )->orWhere('info', 'Like', '%'.$search. '%')->paginate('10');
           
        }else
        {

        $topic = TopicRole::paginate(10);
    }
        return view('admin.Data.viewtopicroles',compact('topic','search'));
    }
    public function editTopicRole($id){


        $topic = TopicRole::find($id);
        return view('admin.Data.edittopicroles',compact('topic'));
    }
    
    public function updateTopicRole(Request $request,$id){
        $request->validate([

            'name'=> 'required',
            'info'=> 'required',
        ]);

        $topic =   $topic = TopicRole::find($id);

        $topic->name = $request->input('name');
        $topic->info = $request->input('info');
        $topic->update();

        return redirect('admin/topicroles')->with('success','Record Updated Successfully');
    }
    public function deleteTopicRole($id){


        $topic = TopicRole::find($id);
        return redirect()->back()->with('error','Record Deleted Successfuly', compact('topic'));
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
                 
                 $name = $sheet->getCell( 'A' . $row )->getValue();              
                 $info = $sheet->getCell( 'B' . $row )->getValue();   

                 $topic = new TopicRole;               
                 $topic->name= $name;               
                 $topic->info= $info;             
                 $topic->save();
              
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
