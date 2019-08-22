<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;



class UserController extends Controller
{
    public function viewUser(){
        $users = User::all();
        return view('admin/viewUser',['users'=>$users]);
    }
}
