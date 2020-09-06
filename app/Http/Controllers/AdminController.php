<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLoginForm(){
        return view('admin.views.login_form');
    }

    public function adminRegisterForm(){
        return view('admin.views.register_form');
    }
  
}
