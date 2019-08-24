<?php

namespace App\Http\Controllers;

use App\Snake;
use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

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

     public function blog(){
         $snake = Snake::paginate(10);
         return view('blog',['snakes'=>$snake]);
     }

     public function individualRescue(){
        $id = Auth::user()->id;
        $snake = DB::table('snakes')->where('user_id', $id)->paginate(2);

        return view('individualRescue',['snakes'=>$snake]);
     }
}
