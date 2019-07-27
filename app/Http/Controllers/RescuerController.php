<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Image;

class rescuersController extends Controller
{

    public function index(){
        return view('admin/add-rescuer');
    }

    public function store(request $request){
        $rescuer = new User();
        if($request->hasFile('file')){
        $filename = $request->file->getClientOriginalName();

        $rescuer->image = date('Y-m-d-H:i:s').$filename;
        $rescuer->name=request('name');
        $rescuer->email=request('email');
        $rescuer->aadhar=request('aadhar');
        $rescuer->bloodgroup=request('bloodgroup');
        $rescuer->dob=request('dob');
        $rescuer->phone1=request('phone1');
        $rescuer->phone2=request('phone2');
        $rescuer->constituency=request('constituency');
        $rescuer->address=request('address');
        $rescuer->save();
        $path = public_path('storage/upload/rescuer/' . $filename);
        Image::make($request->file('file')->getRealPath())->resize(300, 200)->save($path);
        }
        return redirect('/admin/add-rescuer');
    }


    public function callRescuers(){
        return view('callrescuer');
    }

    public function searchRescuers(Request $request)
    {


        $data = DB::table('users')->where('constituency',$request->constituency)->get();
        $data2 = array();
        foreach($data as $data1) {

                $data2[] = [
                    'name' => $data1->name,
                    'phone1' => $data1->phone1,
                    'phone2' => $data1->phone2,
                    'image' => $data1->image,
                    'blood_group' => $data1->bloodgroup,
                    'constituency' => $data1->constituency,
                ];
             }

             $data2 = json_encode($data2);
             return response()->json($data2);
    }

}
