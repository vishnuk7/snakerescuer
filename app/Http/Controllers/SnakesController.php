<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snake;
use Image;
use Mail;
use App\Mail\snakeDetails;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $rescuer = User::find(Auth::user()->id);
        $rescuer->count = $rescuer->count + 1;
        $rescuer->save();

        // send mail
        Mail::Send(new snakeDetails());

        // sweetalert
        toast('Successfully added a snake!','success');

    }
        return redirect('/');
    }

    public function viewSnakes(){
        $snakes = Snake::all();
        return view('admin/viewSnakes',['snakes'=>$snakes]);
    }

    public function destroy($deleteId,$image,$userId){
        $deletePath = 'upload/snakes/'.$image;
        File::delete($deletePath);
        DB::table('snakes')->delete($deleteId);

        $rescuer = User::find($userId);
        $rescuer->count = $rescuer->count - 1;
        $rescuer->save();

        // sweetalert
        toast('Successfully deleted a snake!','success');

        return redirect()->back();
    }
}


