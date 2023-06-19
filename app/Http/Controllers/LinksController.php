<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\categoryLinks;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

class LinksController extends Controller
{
    //
    public function getCategory(Request $request){

        $search = $request['search'];

        if($search != "")
        {

            $category = category::where('name', 'Like', '%'.$search. '%' )->orWhere('description', 'Like', '%'.$search. '%')->paginate('10');
        }
      else{
        $category = category::paginate(10);
    
    }

        return view('admin.Links.links',compact('category','search'));

    }
    public function addCategory(){

       
        return view('admin.Links.addLinks');

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

                    public function importLinksData(Request $request){

                        set_time_limit(0);
                
                         $this->validate($request, [
                             'uploaded_file' => 'required|file|mimes:xls,xlsx'
                         ]);
                         $the_file = $request->file('uploaded_file');
                         try{
                             $spreadsheet = IOFactory::load($the_file->getRealPath());
                             $sheet        = $spreadsheet->getActiveSheet();
                             $row_limit    = $sheet->getHighestDataRow();
                             $column_limit = $sheet->getHighestDataColumn();
                             $row_range    = range( 2, $row_limit );
                             $column_range = range( 'F', $column_limit );
                             $startcount = 2;
                             $data = array();

                             $categoryId = [];

                             foreach ( $row_range as $row ) {   
                                 
                                 $name = $sheet->getCell( 'A' . $row )->getValue();  
                                                                                 
                                 $description = $sheet->getCell( 'B' . $row )->getValue();   
                                 $address = $sheet->getCell( 'D' . $row )->getValue();   
                                $title = $sheet->getCell( 'C' . $row )->getValue();

                                $linkDescription = $sheet->getCell( 'E' . $row )->getValue();   
                                
                                $oldCategory = category::where('name',$name)->where('description',$description)->get();
                                // $oldCategoryLink= categoryLinks::where('catid', trim($name))->get();


                               
                                if(($oldCategory->count()) == 0 ){
                                 
                                 $category = new category;               
                                 $category->name= $name;               
                                 $category->description= $description; 
                                 
                                 $category->save();

                                 $categoryId[0] = $category->id;

                            }
                                
                                 $links = new categoryLinks;
                                 
                                
                                 if(($oldCategory->count()) == 0 ){

                                    $links->catid = $categoryId[0]['id'];


                                    }

                                        $links->title = $title;
                                        $links->address = $address;

                                        $links->description = $linkDescription;


                                       $links->save();

                                                                                                  

                                
                              
                             }
                             // echo "<pre>"; print_r($data); echo "</pre>";
                             // exit;
                             // DB::table('users')->insert($data);
                         } catch (Exception $e) {
                             // $error_code = $e->errorInfo[1];
                             return redirect()->back()->withErrors('There was a problem uploading the data!');
                         }
                         return redirect()->back()->withSuccess('Great! Data has been successfully uploaded.');
                     }
                
               
    }

