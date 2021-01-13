<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Validator;
use App\Models\HealthOfficer;

class RegisterHealthOfficer extends Controller
{
    //
    public function index(){
        return view('auth.registerofficer');
    }

    public function store(Request $request){
        $this->validate($request, 
        ['officer_name'=>'required']
    );
    }
}
