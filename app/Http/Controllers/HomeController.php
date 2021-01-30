<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientsModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected  $general_officer_id;
    protected  $referal_officer_id;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //   public totalPatientsNumber(){

    //   }
    
 
   
    public function index()
    {
             return view('home');


    }
}
