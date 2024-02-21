<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersignupController extends Controller
{
    public function signup(){
        return view('users.usersignup');
    }
}
