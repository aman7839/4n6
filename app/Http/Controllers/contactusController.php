<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class contactusController extends Controller
{
    //
    public function saveContactUs(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'description' => 'required',

        
        ]);

       $user = new ContactUs;

       $user->name = $request->name;
       $user->email = $request->email;
       $user->description = $request->description;
       $user->save();
       return redirect()->back()->with('success','we will contact you soon');

    }

    public function index(){

        $messages=  ContactUs::paginate(10);

     
        return view('admin.Message.contactUs',compact('messages'));

    }
    public function viewMessages($id){

        $messages=  ContactUs::find($id);

        return view('admin.Message.viewmessages',compact('messages'));

    }
    public function replyMessages($id){

        $messages=  ContactUs::find($id);

        return view('admin.Message.replymessages',compact('messages'));

    }
    public function DeleteMessages($id){

        $deleteMessage =  ContactUs::find($id);

        $deleteMessage->delete();

        return redirect()->back()->with('error','Message Deleted Successfully');

    }

   
}
