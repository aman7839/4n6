<?php

namespace App\Http\Controllers;
use App\Models\Theme;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    public function index(){

        $theme = Theme::paginate(10);
        return view('admin.Theme.theme',compact('theme'));

    }

    public function addTheme(){

      
        return view('admin.Theme.addtheme');

    }
    public function saveTheme(Request $request){

        $request->validate([

            'name' => 'required',
            

        ]);

        $theme = new Theme;

        $theme->name = $request->name;
        $theme->save();
        return redirect('admin/theme')->with('success','Theme added succesfully');


       
    }
    public function editTheme($id){

        $theme = Theme::find($id);

    
        return view('admin.Theme.edittheme',compact('theme'));


       
    }
    public function updateTheme(Request $request, $id)
    {

        $request->validate([

            'name' => 'required',
            

        ]);

        $awards = Theme::find($id);


        $awards->name = $request->input('name');
        
        
        $awards->update();

        return redirect('admin/theme')->with('success','Theme updated succesfully');

    }

    public function deleteTheme($id){
        $theme = Theme::find($id);

        $theme->delete();
        return redirect()->back()->with('error', 'Theme deleted Successfully');
    }
   
   
}
