<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Image;
use Mail;

use App\Mail\rescuercredentials;
use App\Mail\SendMail;


class rescuersController extends Controller
{
    public function index(){
        return view('admin/add-rescuer');
    }

    public function store(request $request){
        $rescuer = new User();
        $pass = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        $randpass =substr(str_shuffle($pass), 0, 7);

        if($request->hasFile('file')){
        $filename = $request->file->getClientOriginalName();
            // $ext = $request->file->getClientOriginalExtension();
        $filename = uniqid().$filename;

        // compress and save image
        $store = Image::make($request->file('file')->getRealPath())->resize(100, 100);
        $store = $store->encode('jpg');
        $des = public_path('/upload/users');
        $store->save($des.'/'.$filename);



        $rescuer->image = $filename;
        $rescuer->name=request('name');
        $rescuer->email=request('email');
        $rescuer->aadhar=request('aadhar');
        $rescuer->bloodgroup=request('bloodgroup');
        $rescuer->dob=request('dob');
        $rescuer->phone1=request('phone1');
        $rescuer->phone2=request('phone2');
        $rescuer->constituency=request('constituency');
        $rescuer->address=request('address');
        $rescuer->password=Hash::make($randpass);
        $rescuer->save();


        //send mail
        Mail::Send(new SendMail());
        Mail::Send(new rescuercredentials($randpass));
        }

        return redirect('/admin');
    }

    public function callRescuers(){
        return view('callrescuer');
    }

    public function searchRescuers(Request $request)
    {
        $data = DB::table('users')->where('constituency',$request->constituency)->get();
        $data2 = array();
        foreach($data as $data1) {
                $image_path="upload/users/".$data1->image;
                $data2[] = [
                    'name' => $data1->name,
                    'phone1' => $data1->phone1,
                    'phone2' => $data1->phone2,
                    'image' => $image_path,
                    'blood_group' => $data1->bloodgroup,
                    'constituency' => $data1->constituency,
                ];
             }

             $data2 = json_encode($data2);
             return response()->json($data2);
    }
}
