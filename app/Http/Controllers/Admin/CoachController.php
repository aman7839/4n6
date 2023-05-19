<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vault;
use App\Models\Membership;

use App\Models\VaultFiles;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class CoachController extends Controller
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
public function getFolderData($id){
    try{
        $data = Vault::with('items')->where('id',$id)->first();
        return response(['status'=>true, "data"=>$data]);
    }catch(\Exception $e){
        return response(['status'=>false, "error"=>$e->getMessage()]);
    }
}
    public function getData(){
        $today = date('Y-m-d H:i:s');
        // echo $today;
        $coachID = Auth::user()->id;
        $membership = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
        ->whereDate('end_date', '>=', $today)->where('status',1)
        ->first();
        $vault_tree=[];
        if($membership){
        $vault = Vault::with('items','nestedCategories.items',)->whereNull('parent_id')->where('coach_access',1)->get();
        $vault_tree = $this->buildTree($vault->toArray());
    }

       return view('Coaches/coachvault',compact('membership','vault_tree','coachID'));



       

       

        // try{

        //     $coachID = Auth::user()->id;

          
            

        //     $data = Vault::with('items')->where('id',$coachID->first());
        //     return response(['status'=>true, "data"=>$data]);
        // }catch(\Exception $e){
        //     return response(['status'=>false, "error"=>$e->getMessage()]);
        // }
    }
    
}
