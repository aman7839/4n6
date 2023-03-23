<?php

namespace App\Http\Controllers;

use App\Models\TopicRole;

use Illuminate\Http\Request;

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
    public function ViewTopicRole(){


        $topic = TopicRole::paginate(10);
        return view('admin.Data.viewtopicroles',compact('topic'));
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

}
