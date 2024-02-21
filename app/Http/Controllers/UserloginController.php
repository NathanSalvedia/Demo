<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserloginController extends Controller
{
    public function login(){
        return view('users.userlogin');
    }
}
