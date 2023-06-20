<?php

namespace App\Http\Controllers;
use App\Models\FAQ;


use Illuminate\Http\Request;

class FAQController extends Controller
{
    //
    public function index()
    {
        $faq = FAQ::orderBY('id', 'desc')->paginate(30);
        return view('admin.Faq.index', compact('faq'));
    }

    public function addFaq()
    {

        return view('admin.Faq.addfaq');
    }

    public function saveFaq(Request $request)


    {
        $request->validate([

            'type' => 'required',
            'Question' => 'required',
            'Answer' => 'required',
        

        ]);

           $faq = new FAQ;

           $faq->type = $request->type;
           $faq->Question = $request->Question;
           $faq->Answer = $request->Answer;
           $faq->save();

        return redirect('admin/faq')->with('success', 'Record addedd successfully');
    }

    public function editFaq($id){

        $faq = FAQ::find($id);
        return view('admin.Faq.editfaq', compact('faq'));
    }

    public function updateFaq(Request $request,$id){
        $request->validate([

            'type' => 'required',
            'question' => 'required',
            'answer' => 'required',
        

        ]);

        $faq = FAQ::find($id);

        $faq->type = $request->input('type');
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->update();

        return redirect('admin/faq')->with('success', 'Record updated successfully');

    }
    public function delete($id)
    { 
           
            
            $faq = FAQ::find($id);
         
            $faq->delete();
            return redirect()->back()->with('error', 'Record Deleted Successfully');
        
    }
}


