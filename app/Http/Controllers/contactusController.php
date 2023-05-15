<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Exception;
use Illuminate\Support\Facades\Mail;

class contactusController extends Controller
{
    //
    public function saveContactUs(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'g-recaptcha-response' => 'recaptcha',

        
        ]);

       $user = new ContactUs;

       $user->name = $request->name;
       $user->email = $request->email;
       $user->description = $request->description;
       $user->save();
    //    $details = [
    //     'title' => 'Mail from ItSolutionStuff.com',
    //     'body' => 'This is for testing email using smtp'
    // ];

    //     Mail::to($request->email)->send(new \App\Mail\ContactUs($details));
       return redirect()->back()->with('success','We will contact you soon');

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

    public function replyMessagestoUser(){

        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\ContactUs($details));


        return view('admin.Message.replymessages',compact('messages'));

    }

   
}
