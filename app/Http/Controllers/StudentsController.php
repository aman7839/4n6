<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
