<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\HealthOfficer;
use App\Models\NationalHospital;
use App\Models\RegionalHospital;

class RegisterHealthOfficer extends Controller
{
    //
    public function index(){
        return view('auth.registerofficer');
    }


    public function store(Request $request){
        $this->validate($request, 
        ['officer_name'=>'required',
        'contact'=>'required|min:10|max:10'
        ]
    );
    $min_officers = DB::table("general_hospitals")->min('officer_total');
    $hospital_details = DB::table("general_hospitals")
    ->where("officer_total", $min_officers)
    ->get();
    if(count($hospital_details)){
        $request->user()->registerOfficer()->create(
            [
                'officer_name'=>$request->officer_name,
                'hospital_id'=>$hospital_details[0]->id,
                'hospital_name'=>$hospital_details[0]->hospital_name,
                'contact'=>$request->contact
 
            ]
            );
            return back()->with('status','registered successfully');


    }
    else
    {
           return back()->with('status', 'hospitals lack data');
    }
                 }
       

    

}
