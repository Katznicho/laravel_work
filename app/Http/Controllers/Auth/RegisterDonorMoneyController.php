<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterDonorMoneyController extends Controller
{
    //
    public function index(){
        return view('auth.registerdonormoney');
    }
    public function store(Request $request){
        $this->validate($request, 
        ['donor_name'=>'required',
        'amount'=>'required']
    );
    $request->user()->registerDonorMoney()->create(
        [
            'donor_name'=>$request->donor_name,
            'amount'=>$request->amount

        ]
        );
        return back()->with('status', 'shs '. number_format($request->amount) . ' registered successfully');
    }
}
