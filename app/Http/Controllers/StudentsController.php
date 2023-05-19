<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vault;
use App\Models\User;
use App\Models\CoachStudent;


use App\Models\Membership;
class StudentsController extends Controller
{
    //

    public function Dashboard()

    {

      return View('student.dashboard');

    }

    public function logout()

    {

        Auth::logout();        
        return redirect('login');
    }

    
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
      $studentID = Auth::user()->id;

      $vaultAccessToStudent = User::where('vault_access',1)->where('id',$studentID)->get();

      // echo '<pre>'; print_r(($vaultAccessToStudent)->toArray()); echo '</pre>'; exit;
       $studentDetails = CoachStudent::where('student_id',$studentID )->get();

      $coachID =        $studentDetails[0]->coach_id;
      // echo '<pre>'; print_r($coachID); echo '</pre>'; exit;

      // $coachID = Auth::user()->id;
      CoachStudent::where('coach_id',  $coachID  )->get();
      $membership = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
      ->whereDate('end_date', '>=', $today)->where('status',1)
      ->first();
      $vault_tree=[];
      if($membership){
      $vault = Vault::with('items','nestedCategories.items',)->whereNull('parent_id')->where('student_access',1)->get();
      $vault_tree = $this->buildTree($vault->toArray());
  }

     return view('student/studentvault',compact('membership','vault_tree','coachID','vaultAccessToStudent'));



     

     

      // try{

      //     $coachID = Auth::user()->id;

        
          

      //     $data = Vault::with('items')->where('id',$coachID->first());
      //     return response(['status'=>true, "data"=>$data]);
      // }catch(\Exception $e){
      //     return response(['status'=>false, "error"=>$e->getMessage()]);
      // }
  }
}
