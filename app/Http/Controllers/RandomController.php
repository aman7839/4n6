<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Random;


class RandomController extends Controller
{
    public function index(){

        $topics = Random::paginate(10);

        return view('admin.Topics.random',compact('topics'));
    

    }
    public function addTopics(Request $request){


        return view('admin.Topics.addTopics');

    }
    public function saveTopics(Request $request){


        $request->validate([

            'characters' => 'required',
            'locations' => 'required',
            'situations' => 'required',
           
        ]);
        
            $topics = new Random;


            $topics->characters = $request->characters;
            $topics->locations = $request->locations;
            $topics->situations = $request->situations;
            $topics->save();
            return redirect('admin/random')->with('success','Topic Added Successfully');

            
        }
        public function editTopics($id){

            $topics = Random::find($id);
            if($topics){

                return view('admin.Topics.editTopics',compact('topics'));

                }
                else{
                    return redirect()->back();
                }

    
        }
        public function updateTopics(Request $request, $id){

            $request->validate([

            
            
                'characters' => 'required',
                'locations' => 'required',
                'situations' => 'required',
    
            ]);
    
    
            $topics = Random::find($id);
    
    
            $topics->characters = $request->input('characters');
            $topics->locations = $request->input('locations');
            $topics->situations = $request->input('situations');
            $topics->update();
    
    
    
            return redirect('admin/random')->with('success', 'Topics updated Successfully');
    
        }

        public function deleteTopics($id){

            $topic = Random::find($id);
            $topic->delete();
            return redirect()->back()->with('error', 'Topic Deleted Successfully');


        }

    }



