<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class MembershipController extends Controller
{
    //
    public function coachMemberships(Request $request){
        $user_id= Auth::user()->id;
        $activeMembership =  Membership::where('start_date','<=',Carbon::now())->where('end_date','>=',Carbon::now())->where('id',$user_id)->first();
        $pastMemberships = Membership::where('end_date','<',Carbon::now())->where('id',$user_id)->get();
        // echo "<pre>"; print_r($activeMembership->toArray()); 
        // exit;
        return view('admin.Membership.coach.activemembership',compact('activeMembership','pastMemberships'));
    }

    public function adminActiveMemberships(Request $request){
        $activeMembership =  Membership::with(['user'])->where('start_date','<=',Carbon::now())->where('end_date','>=',Carbon::now())->paginate(20);
        //   echo "<pre>"; print_r($activeMembership->toArray()); echo"</pre>";
        // exit;
        return view('admin.Membership.admin.activemembership',compact('activeMembership'));
    }

    public function adminPastMembership(Request $request){
        $pastmembership = Membership::with(['user'])->where('end_date','<',Carbon::now())->paginate(20);
        return view('admin.Membership.admin.pastmembership',compact('pastmembership'));
    }

    public function adminViewMembership($id){
        $membership = Membership::with(['user'])->where('id',$id)->first();
        // echo "<pre>"; print_r($membership->toArray()); 
        // exit;
        return view('admin.Membership.admin.viewmembership',compact('membership'));
    }

    public function adminEditMembership($id){
        $membership = Membership::with(['user'])->where('id',$id)->first();
        // echo "<pre>"; print_r($membership->toArray()); 
        // exit;
        return view('admin.Membership.admin.editmembership',compact('membership'));
    }
    
    public function updateMembership(Request $request){
try{
     $data=$request->all();
    $membership_id= $data['membership_id'];
    $dateRange= $data['daterange'];
    $start_date= date('Y-m-d H:i:s', strtotime(trim(explode("-",$dateRange)[0])));
    $end_date= date('Y-m-d H:i:s', strtotime(trim(explode("-",$dateRange)[1])));
    
    $membership = Membership::where('id', $membership_id)->first();
    
    if($membership){
        $membership->start_date =$start_date;
        $membership->end_date =$end_date;
        $membership->cheque_number= isset($data['cheque_number']) ? $data['cheque_number']:$membership->cheque_number;
        $membership->bank_name= isset($data['bank_name']) ? $data['bank_name']:$membership->bank_name;
        $membership->status=$data['status'];
        if($end_date < Carbon::now() && $membership->status==1){
            $membership->status=2;
        }
        if($request->file()) {
            if($membership->cheque_image){
                unlink(public_path($membership->cheque_image));
            }
            $fileName = time().rand(10,100).'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('cheques', $fileName, 'public');
            $membership->cheque_status = 'pending';
            $membership->cheque_image = '/storage/' . $filePath;
        }
        $membership->save();
    
    }
    return back()->with('success','Updated successfully');
}catch (\Exception $e) {
    return back()->with('error', $e->getMessage() ?? 'Something went wrong.');
}

    }
}
