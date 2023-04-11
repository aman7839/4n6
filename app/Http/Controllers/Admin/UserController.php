<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function updatePassword(Request $request) {
        $input = $request->all();
        $user = User::Where('id',$input["user_id"])->first();
        if($user){
            $user->password=Hash::make($input['password']);
            $user->save();
            ///send email to user with password
        }
        return back()
        ->with('success','Password updated successfully');
    
    }
}
