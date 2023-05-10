<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vault;
use App\Models\VaultFiles;


class VaultController extends Controller
{
function buildTree(array $elements, $parentId = null, $path="") {
    $branch = [];
    

    foreach ($elements as $element) {
        $object = new \stdClass();

        foreach ($element as $key => $value) {
            $object->{$key} = $value;    
                
        } 

        if ($object->parent_id == $parentId) {
           
            $children = $this->buildTree($elements, $object->id);
            if ($children) {
                $object->children = $children;
            }

            $branch[] = $object;
        }
    }
   
    return $branch;
}

public function addFolder()
{   
    $vault = Vault::with('items','nestedCategories.items',)->whereNull('parent_id')->get();
    $vault_tree = $this->buildTree($vault->toArray());
    // echo '<pre>';  print_r(json_encode($vault_tree)); echo '</pre>';
    // exit; 
    return view('admin.vault.addfolder', compact('vault_tree'));
}

public function getFolderData($id){
    try{
        $data = Vault::with('items')->where('id',$id)->first();
        return response(['status'=>true, "data"=>$data]);
    }catch(\Exception $e){
        return response(['status'=>false, "error"=>$e->getMessage()]);
    }
}





public function storeFolder(Request $request){
    try {
        $folder = new Vault;
        $folder->name = $request->name;
        $folder->parent_id = $request->parent_id != "" ? $request->parent_id : null;
        $folder->coach_access = $folder->coach_access =="on" ? true : false;
        $folder->student_access = $folder->student_access =="on" ? true : false;
        $folder->save();
        return response(['status'=>true, "data"=>$folder]);
    } catch (\Exception $e) {
        return response(['status'=>false, "error"=>$e->getMessage()]);
    }
}

public function editFolder(Request $request , $id){
    try {
    $data = Vault::find($id);
    $data->name = $request->name;
    $data->description = $request->description;
    $data->coach_access = $request->coach_access =="on" ? true : false;
    $data->student_access = $request->student_access =="on" ? true : false;
    $data->save();
    return response(['status'=>true, "data"=>$data]);
    } catch (\Exception $e) {
        return response(['status'=>false, "error"=>$e->getMessage()]);
    }
}

public function deleteFolder(Request $request, $id){
    try{
        $data = Vault::find($id);
            $data->delete(); 
        
        return response(['status'=>true]);
    }catch(\Exception $e){
        return response(['status'=>false, "error"=>$e->getMessage()]);
    }
}

public function fileUpload(Request $req){
    // $req->validate([
    // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
    // ]);
    $fileModel = new VaultFiles;
    
if($req->hasFile('files')) {
    $files = $req->file('files');
    foreach($files as $file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        $fileModel = new VaultFiles;
        $fileModel->name = $file->getClientOriginalName();
        $fileModel->file = '/storage/' . $filePath;
        $fileModel->vault_id = $req->vault_id;
        $fileModel->save();
    }
    return back()
        ->with('success','Files have been uploaded.');
} else {
    return back()
        ->with('error','No files were selected for upload.');
}

    // $fileModel = new VaultFiles; 
    
    // if($req->file()) {
    //     $fileName = time().'_'.$req->file->getClientOriginalName();
    //     $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
    //     $fileModel->name = $req->file->getClientOriginalName();
    //     $fileModel->file = '/storage/' . $filePath;
    //     $fileModel->vault_id = $req->vault_id;
    //     $fileModel->save();
    //     return back()
    //     ->with('success','File has been uploaded.')
    //     ->with('file', $fileName);
    // }
}

    public function deleteFile($id){
    try{
        $file=VaultFiles::find($id);
        if($file->count()>0){
            unlink(public_path($file->file));
            $file->delete();
            return response(['status'=>true]);
        }

    }catch(\Exception $e){
            return response(['status'=>false, "error"=>$e->getMessage()]);
        }
    }


}