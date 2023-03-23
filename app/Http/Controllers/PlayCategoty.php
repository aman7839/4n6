<?php

namespace App\Http\Controllers;
use App\Models\PlayCategory;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PlayCategoty extends Controller
{
    //
    public function index(){
   $category = PlayCategory::paginate(5);
        return view('admin.dashboard.Links.playcategory',compact('category'));
    }
    
    public function addCategory(){

             return view('admin.dashboard.Links.addplaycategory');
         }
        
         public function  saveCategory(Request $request){

            $request->validate([

                'name' => 'required',
                
    
            ]);

            $category = new PlayCategory;

            $category->name = $request->name;
            $category->save();

            return redirect('admin/playcategory')->with('success', 'Category Added Successfully');

        }
        public function editCategory($id){

            $category = PlayCategory::find($id);
    
            return view('admin.dashboard.Links.editplaycategory', compact('category'));
        }
       
        public function updateCategory( Request $request,$id){

            $request->validate([

                'name' => 'required',
                
    
            ]);
            $category = PlayCategory::find($id);


            $category->name = $request->input('name');
            $category->update();
    
            return redirect('admin/playcategory')->with('success', 'Category Updated Successfully');
        }
        public function delete($id)
        { 

            
                $category = PlayCategory::find($id);

                $category->delete();
                return redirect()->back()->with('error', 'Category Deleted Successfully');
            
        }
}

