<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snake;
use Image;
use Mail;
use App\Mail\snakeDetails;

class SnakesController extends Controller
{
    public function store(request $request){
        $snake = new Snake();
        if($request->hasFile('file')){
        $filename = $request->file->getClientOriginalName();
        $filename = date('dmYhis').$filename;

        $snake->image = $filename;
        $snake->species = request('species');
        $snake->description = request('desc');
        $snake->date = request('date');
        $snake->time = request('time');
        $snake->location = request('location');
        $snake->save();


        $path = public_path('storage/upload/snake/' . $filename);
        Image::make($request->file('file')->getRealPath())->resize(300, 200)->save($path);

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


