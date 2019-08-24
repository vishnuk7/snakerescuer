<?php

namespace App\Http\Controllers;

use App\Snake;
use Illuminate\Http\Request;
use App\User;

class CommonController extends Controller
{
    public function welcome(){
        $snake = Snake::orderBy('id','desc')->take(2)->get();

        return view('welcome',['snakes'=>$snake]);
    }

     public function home(){
         $snake = Snake::all()->count();
         $user = User::all()->count();
         $data=[
             'snake_count'=> $snake,
             'user_count'=>$user
         ];
         return view('admin.dashboard',['data'=>$data]);
     }
}
