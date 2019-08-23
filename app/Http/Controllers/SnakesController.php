<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snake;
use Image;
use Mail;
use App\Mail\snakeDetails;
use Illuminate\Support\Facades\Auth;
use Storage;
class SnakesController extends Controller
{
    public function store(request $request){


        $snake = new Snake();
        if($request->hasFile('file')){
        $filename = $request->file->getClientOriginalName();
        // $ext = $request->file->getClientOriginalExtension();
        $filename = uniqid().$filename;

        $store = Image::make($request->file('file')->getRealPath())->resize(300, 200);
        $store = $store->encode('jpg');
        $des = public_path('/upload/snakes');
        $store->save($des.'/'.$filename);


        $snake->image = $filename;
        $snake->user_id = Auth::user()->id;
        $snake->species = request('species');
        $snake->description = request('desc');
        $snake->date = request('date');
        $snake->time = request('time');
        $snake->location = request('location');
        $snake->save();




        // send mail
        Mail::Send(new snakeDetails());

    }
        return redirect('/');
    }

    public function viewSnakes(){
        $snakes = Snake::all();

        return view('admin/viewSnakes',['snakes'=>$snakes]);
    }
}


