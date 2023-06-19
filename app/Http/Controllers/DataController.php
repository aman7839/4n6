<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\awards;
use App\Models\Extemp;
use App\Models\Theme;
use App\Models\playCategory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;




use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function index(Request $request){

$search = $request['search'];

if ($search != ""){
        
            $data = Data::where('title', 'Like', '%'.$search. '%' )->orWhere('author', 'Like', '%'.$search. '%')->paginate(50);
            // $data->appends($search);
            $data->appends(['search' => $search]);
        }
        else
        
        {
        
           $data = Data::with(['awards','theme', 'category'])->paginate(50);
        
        }
        
             return view('admin.Data.data',compact('data','search'));
                
            }
   
    public function adddata(){
        $awards = awards::orderBY('awards_name','asc')->get();
        $theme = Theme::orderBY('name','asc')->get();
        $category = PlayCategory::orderBY('name','asc')->get();


     
        return view('admin.Data.adddata',compact('awards','theme','category'));
             
         }

         public function saveData(Request $request){
            $request->validate([

                'title' => 'required',
                'author' => 'required',
                'book' => 'url',
                'publisher' => 'required',
                'isbn' => 'required',
                'summary' => 'required',
                'type' => 'required',
                'characters'=>'required',
                'rating'=>'required',
                // 'public'=>'required',

               
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
            // $data->public = $request->public;

            $data->save();
            return redirect('admin/data')->with('success','Data Added Successfully');


         }
         public function editData($id){
            $data = Data::where('id',$id)->with(['awards','theme','category'])->first();
           
      

           $awards = awards::orderBY('awards_name','asc')->get();
           $theme = Theme::orderBY('name','asc')->get();
           $category = PlayCategory::orderBY('name','asc')->get();

            return view('admin.Data.editdata',compact('data','awards','theme','category'));

         }
         public function deleteData($id)
         { 
                // echo  $id; 
                 
                 $data = Extemp::find($id);
                //  echo $data; exit;
                 $data->delete();
                 return redirect()->back()->with('error', 'Data Deleted Successfully');
             
         }

         public function delete($id)
         { 
                // echo  $id; 
                 
                 $data = Data::find($id);
                //  echo $data; exit;
                 $data->delete();
                 return redirect()->back()->with('error', 'Data Deleted Successfully');
             
         }
         public function updateData(Request $request,$id){
            $request->validate([

                'title' => 'required',
                'author' => 'required',
                'book' => 'url',
                'publisher' => 'required',
                'isbn' => 'required',
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

         public function importData(Request $request){
         
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
                 foreach ( $row_range as $row ) {   
                     
                     $tite = $sheet->getCell( 'A' . $row )->getValue();  
                                                                     
                     $author = $sheet->getCell( 'B' . $row )->getValue();   
                     $book = $sheet->getCell( 'C' . $row )->getValue();   
                    $publisher = $sheet->getCell( 'D' . $row )->getValue();


                    $summary = $sheet->getCell( 'M' . $row )->getValue();   
                    $awardName = $sheet->getCell( 'J' . $row )->getValue();   

                    $categoryName = $sheet->getCell( 'G' . $row )->getValue();   

                    $themeName = $sheet->getCell( 'K' . $row )->getValue();   

                    $type = $sheet->getCell( 'H' . $row )->getValue();   
                    $character = $sheet->getCell( 'I' . $row )->getValue();   

                    $rating = $sheet->getCell( 'L' . $row )->getValue();  
                    $isbn = $sheet->getCell( 'F' . $row )->getValue();   


                    
                    $awardArray = awards::where('awards_name', trim($awardName))->get();
                    $themeArray = Theme::where('name', trim($themeName))->get();

                    $categoryArray = PlayCategory::where('name', trim($categoryName))->get();
                     
                     $data = new Data;               
                     $data->title= $tite;               
                     $data->author= $author;  
                     $data->book= $book;             

                     $data->publisher= $publisher; 
                     $data->summary= $summary;     

                     if(($awardArray->count()) > 0 ){

                        $data->award_id= $awardArray['0']['id'];  

                        }else{

                            $awards = new awards;

                            $awards->awards_name = $awardName;
                           $awards->save();
                            $data->award_id = $awards->id;
                        }
                        if(($themeArray->count()) > 0 ){

                            $data->theme_id= $themeArray['0']['id'];  
    
                            }else{
    
                                $theme = new Theme;
    
                                $theme->name = $themeName;
                               $theme->save();
                                $data->theme_id = $theme->id;
                            }
                
            
                            if(($categoryArray->count()) > 0 ){

                                $data->category_id= $categoryArray['0']['id']; 
        
                                }
                                else {
        
                                    $category = new PlayCategory;
        
                                    $category->name = $categoryName;
                                    $category->save();

                                    $data->category_id = $category->id;
                                }

                

                   
                     $data->type= $type;     

                     $data->characters= $character;     

                     $data->rating= $rating;     
                     $data->isbn= $isbn;     
            
                   $data->save();
                  
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
