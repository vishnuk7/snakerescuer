<?php

namespace App\Http\Controllers;

use App\Snake;
use App\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
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
