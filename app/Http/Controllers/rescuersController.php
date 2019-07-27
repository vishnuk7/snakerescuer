<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rescuers;

class rescuersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function allRescuers()
    {
        $data = rescuers::all();
        $data2 = array();
        $i=0;



        

            foreach($data as $data1) {
          
                $data2[] = [
                    'name' => $data1->name,
                    'dob' => $data1->dob,
                    'age' => $data1->age,
                    'phone1' => $data1->phone1,
                    'phone2' => $data1->phone2,
                    'email' => $data1->email,
                    'image' => $data1->image,
                    'blood_group' => $data1->blood_group,
                    'aadar' => $data1->aadar,
                    'constituency' => $data1->constituency,
                    'address' => $data1->address,
                ];
             }
             $data2 = json_encode($data2);
             return response($data2);

        
        

        


    }

}
