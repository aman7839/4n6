<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\awards;
use App\Models\Theme;
use App\Models\playCategory;




use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function index(){
   $data = Data::with(['awards', 'theme', 'category'])->paginate(10);


   

   return view('admin.Data.data',compact('data'));
        
    }
   
    public function adddata(){
        $awards = awards::all();
        $theme = Theme::all();
        $category = PlayCategory::all();


     
        return view('admin.Data.adddata',compact('awards','theme','category'));
             
         }

         public function saveData(Request $request){
            $request->validate([

                'title' => 'required',
                'author' => 'required',
                'book' => 'url',
                'publisher' => 'required',
                'isbn' => 'required|numeric',
                'summary' => 'required',
                'type' => 'required',
                'characters'=>'required',
                'rating'=>'required',
                'public'=>'required',

               
                'category_id'=>'required',


            ]);

            if($request->awards_name){


                $award = new awards();
                $award->awards_name = $request->awards_name;
                $award->save();
            }

            if($request->name){
                $themeName = new Theme();
                $themeName->name = $request->name;
                $themeName->save();
            }

            $data = new Data;
            $data->title = $request->title;
            $data->author = $request->author;
            $data->book = $request->book;
            $data->publisher = $request->publisher;
            $data->isbn = $request->isbn;
            $data->type = $request->type;
            $data->summary = $request->summary;
            $data->award_id = empty($request->awards_name) ? $request->award_id : $award->id;
            $data->theme_id = empty($request->name) ? $request->theme_id : $themeName->id;
            $data->category_id = $request->category_id;
            $data->characters = $request->characters;
            $data->rating = $request->rating;
            $data->public = $request->public;

            $data->save();
            return redirect('admin/data')->with('success','Data Added Successfully');


         }
         public function editData($id){
            $data = Data::where('id',$id)->with(['awards','theme','category'])->first();
           
            $awards = awards::all();
           $theme = Theme::all();
           $category = PlayCategory::all();

            return view('admin.Data.editdata',compact('data','awards','theme','category'));

         }
         public function delete($id)
         { 
 
             
                 $data = Data::find($id);
 
                 $data->delete();
                 return redirect()->back()->with('error', 'Data Deleted Successfully');
             
         }
         public function updateData(Request $request,$id){
            $request->validate([

                'title' => 'required',
                'author' => 'required',
                'book' => 'url',
                'publisher' => 'required',
                'isbn' => 'required|numeric',
                'summary' => 'required',
                'type' => 'required',
                'characters'=>'required',
                'rating'=>'required',


            ]);
            
              $data = Data::find($id);


            $data->title = $request->input('title');
            $data->author = $request->input('author');
            $data->book =  $request->input('book');
            $data->publisher =  $request->input('publisher');
            $data->isbn =  $request->input('isbn');
            $data->type = $request->input('type');
            $data->summary = $request->input('summary');
            $data->award_id = $request->input('award_id');

            $data->theme_id =  $request->input('theme_id');

            $data->category_id = $request->input('category_id');

            $data->characters = $request->input('characters');
            $data->rating = $request->input('rating');
            $data->public = $request->input('public');

            $data->update();
            return redirect('admin/data')->with('success','Data Updated Successfully');


         }
}
