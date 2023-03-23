<?php

namespace App\Http\Controllers;
use App\Models\states;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;



class statesController extends Controller
{
    //
    public function getStates(){

        $state= states::paginate(10);

        return view('admin.States.states',compact('state'));


    }


    public function addStates(){

        return view('admin.States.addstate');
    }

    public function saveStates(Request $request)
    {



        $request->validate([

            'name' => 'required',   
            'description' => 'required',
            'file' => 'required|file|mimes:pdf|max:2048',

        ]);
        if ($request->hasfile('file')) {
            try{
                $file = $request->file('file');
                $imageName = time() . '-' . $file->getClientOriginalName();
                $file->move('public/file/', $imageName);
    
                $state = new states;
    
                $state->name = $request->name;
               
                $state->file =   $imageName;
    
                $state->description = $request->description;
                $state->save();
                return redirect('admin/states')->with('success','State Added Successfully');
            }catch(Exception $e){
                return $e->getMessage();
            }


            
        }
    }
    public function deleteState($id)
    { 
            $state = states::find($id);
            $state->delete();
            return redirect()->back()->with('error', 'Data Deleted Successfully');
        
    }
    public function editState($id)
    {

        $state = states::find($id);
        return view('admin.States.editState', compact('state'));
        
       
    }
    public function updateState(Request $request, $id)
    {


        $request->validate([

            'name' => 'required',   
            'file' => 'file|mimes:pdf|max:2048',

        ]);

        $state = states::find($id);

        $state->name = $request->input('name');

        if ($request->hasfile('file')) {
            $destination = 'public/file/' . $state->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('file');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('public/file/', $imageName);
            $state->file =   $imageName;
        }

        $state->update();



        return redirect('admin/states')->with('success', 'States updated Successfully');
    }

    public function view($file){
        $file_path = ('public/file/'.$file);
        return response()->file( $file_path);
    }
    
}
