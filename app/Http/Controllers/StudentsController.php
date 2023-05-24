<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vault;
use App\Models\User;
use App\Models\CoachStudent;
use Mail;

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
      $studentID = Auth::user()->id;
      $coachStudent = User::where('id',$studentID)->get();
       $vaultAccessToStudentID = $coachStudent[0]->vault_access;
       $studentDetails = CoachStudent::where('student_id',$studentID )->get();    
      $coachID =     $studentDetails[0]->coach_id;
      $membership = Membership::where('user_id', $coachID)-> whereDate('start_date', '<=', $today)
      ->whereDate('end_date', '>=', $today)->where('status',1)
      ->first();

      $vault_tree=[];
      // if(!empty($membership && !empty($vaultAccessToStudent))){
      $vault = Vault::with('items','nestedCategories.items',)->whereNull('parent_id')->where('student_access',1)->get();
      $vault_tree = $this->buildTree($vault->toArray());
  // }

     return view('student/studentvault',compact('membership','vault_tree','coachID','vaultAccessToStudentID'));

      // try{

      //     $coachID = Auth::user()->id;

        
          

      //     $data = Vault::with('items')->where('id',$coachID->first());
      //     return response(['status'=>true, "data"=>$data]);
      // }catch(\Exception $e){
      //     return response(['status'=>false, "error"=>$e->getMessage()]);
      // }
  }
}
