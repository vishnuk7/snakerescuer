<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snake;
use Image;

class SnakesController extends Controller
{
    public function store(request $request){
        $snake = new Snake();
        if($request->hasFile('file')){
        $filename = $request->file->getClientOriginalName();
        
        $snake->image = date('Y-m-d-H:i:s').$filename;
        $snake->species=request('species');
        $snake->description=request('desc');
        $snake->date=request('date');
        $snake->time=request('time');
        $snake->location=request('location');
        $snake->save();

        $path = public_path('storage/upload/snake/' . $filename);
        Image::make($request->file('file')->getRealPath())->resize(300, 200)->save($path);
        }
        return redirect('/');
    }
}


