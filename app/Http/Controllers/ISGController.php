<?php

namespace App\Http\Controllers;
use App\Models\ISG;

use Illuminate\Http\Request;

class ISGController extends Controller
{
    //
    public function index(){

        $topic = ISG::paginate(10);

        return view('admin.Data.isg',compact('topic'));
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
        return redirect()->back()->with('error','Record Deleted Successfuly', compact('topic'));
    }

}
