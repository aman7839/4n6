<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\categoryLinks;

class LinksController extends Controller
{
    //
    public function getCategory(){

        $category = category::paginate(10);

        return view('admin.Links.links',compact('category'));

    }
    public function addCategory(){

       
        return view('admin.Links.addlinks');

    }

    public function saveCategory(Request $request){

        $request->validate([

            'name' => 'required',
            
            'description'=>'required',
        ]);
           $category = new category;

            $category->name =   $request->name;
            $category->description =  $request->description;
            $category->save();
          
         return redirect('admin/category')->with('success', 'Category Added Successfully');
           
        }

        public function editCategory($id){

            $category = category::find($id);
            return view('admin.Links.editlinks',compact('category'));
    
        }
        public function updateCategory(Request $request,$id){

            $request->validate([
    
                'name' => 'required',
                
                'description'=>'required',
            ]);
               $category = category::find($id);
    
                $category->name =   $request->input('name');
                $category->description = $request->input('description');
                $category->update();
              
             return redirect('admin/category')->with('success', 'Category Updated Successfully');
               
            }
            public function deleteCategory($id)
            { 

                    category::where('id', $id)->delete();
                    categoryLinks::where('catid', $id)->delete();
                    return redirect()->back()->with('success', 'Category With Its Links Deleted Successfully');
                
            }

            public function viewLinks(Request $request){
                $catid = $request->cat_id;
                
                if($catid){
                    $catlinks = categoryLinks::where('catid', $catid)->paginate(10);
                    return view('admin.Links.viewlinks',compact(['catlinks',"catid"]));
                }
               
        
            }
            public function addLinks(Request $request){

                 $catid = $request->cat_id;
               
                 $category = category::all();

       

                return view('admin.Links.addViewLinks',compact('catid','category'));
        
            }
            public function saveLinks(Request $request){

                $request->validate([
        
                    'title' => 'required',
                    "address" => "required|url",
                    'description'=>'required',
                ]);
                   $user = new categoryLinks;
        
                    $user->title =   $request->title;
                    $user->catid =   $request->catid;

                    $user->address =   $request->address;

                    $user->description =  $request->description;
                    $user->save();

                   

                  
                 return redirect('admin/category')->with('success', 'Link Added Successfully');
                   
                }
                public function deleteLinks($id)
                { 

                    
                        $user = categoryLinks::find($id);

                        $user->delete();
                        return redirect()->back()->with('error', 'Links Deleted Successfully');
                    
                }
                public function editCategoryLinks(Request $request,$id){

                    
                    $catid = $request->cat_id;
               

                    $link = categoryLinks::find($id);


                   return view('admin.Links.editcategorylinks',compact('link','catid'));
            

                   
                }
                public function updateCategoryLinks(Request $request,$id){

                    $request->validate([
            
                        'title' => 'required',
                        
                        'description'=>'required',
                        'address'=>'required|url',
                    ]);
                       $link = categoryLinks::find($id);
            
                        $link->title =   $request->input('title');
                        $link->description = $request->input('description');
                        $link->address = $request->input('address');

                        $link->update();
                      
                     return redirect()->back()->with('success', 'Links Updated Successfully');
                       
                    }
                
               
    }

