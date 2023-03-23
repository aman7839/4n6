<?php

namespace App\Http\Controllers;

use App\Models\users_guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Client\Response;

class UsersGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $document = users_guide::paginate(10);
        
        return view('admin.Documents.usersGuide',compact('document'));
    }
    public function addDocuments()
    {   
       
        return view('admin.Documents.adddocuments');
    }

    /**
     * Show the form for creating a new resource.
     
     * @return \Illuminate\Http\Response
     */
    public function saveDocuments(Request $request)
    {           
        $request->validate([

            'name' => 'required',
            
            'image' => 'required|mimes:pdf|max:2048',

        ]);
           $document = new users_guide;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $imageName = time() . '-' . $file->getClientOriginalName();
            
            $file->move('public/images/', $imageName);

            $document->image =   $imageName;
            $document->name =   $request->name;
            $document->save();
            if ($document) {
                return redirect('admin/documents')->with('success', 'Document Added Successfully');
            } else {
                return redirect()->back()->with('error', 'Document Not Added');
            }
        }

    }
    public function editDocuments($id){

        $document = users_guide::find($id);

        return view('admin.Documents.editdocuments', compact('document'));
    }

    
    public function updateDocuments(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            
            'image' => 'mimes:pdf|max:2048',

        ]);
      
       $document = users_guide::find($id);

       $document->name =  $request->input('name');
       if ($request->hasfile('image')) {
        $destination = 'public/images/' . $document->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $imageName = time() . '-' . $file->getClientOriginalName();
        $file->move('public/images/', $imageName);
        $document->image =   $imageName;
    }
         $document->update();



    return redirect('admin/documents')->with('success', 'Document updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users_guide  $users_guide
     * @return \Illuminate\Http\Response
     */
    public function deleteDocuments($id)
    { 
            $document = users_guide::find($id);
            $document->delete();
            return redirect()->back()->with('error', 'Document Deleted Successfully');
        
    }
    
    public function download($file){
        $file_path = ('public/images/'.$file);
        return response()->file( $file_path);
    }
    

}
