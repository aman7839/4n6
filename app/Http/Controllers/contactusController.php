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
       $details = [
        'title' => 'Hi admin,' . $request->name . 'has been submitting a contact us form',
        'body' => $request->description
    ];

        Mail::to($request->email)->send(new \App\Mail\ContactUs($details));
       return redirect()->back()->with('success','Thanks! We will contact you soon');

    }

    public function index(){

        $messages=  ContactUs::paginate(10);

     
        return view('admin.Message.contactUs',compact('messages'));

    }
    public function viewMessages($id){

        $messages=  ContactUs::find($id);

        return view('admin.Message.viewmessages',compact('messages'));

    }
    public function replyMessages(Request $req, $id){

        $messageBody = $req->description;
        
        $messages=  ContactUs::find($id);

        return view('admin.Message.replymessages',compact('messages','messageBody'));

    }
    public function DeleteMessages($id){
        

        $deleteMessage =  ContactUs::find($id);
        $deleteMessage->delete();

        return redirect()->back()->with('error','Message Deleted Successfully');

    }

    public function replyMessagestoUser(Request $req, $id){
        $messages=  ContactUs::find($id);
        $messages->status = 1;
        $messages->update();
        $messageBody = $req->description;

        $user = [
            // 'name' => $messages->name,
            'desciption' =>  $messageBody
        ];

        Mail::to($messages->email)->send(new \App\Mail\ReplyMessages($user));

        return redirect('admin/messages')->with('success','Message delivered successfully.');
        // return view('admin.Message.replymessages',compact('messages','messageBody'))->with('success', 'Message delivered successfully.');

    }

   
}
