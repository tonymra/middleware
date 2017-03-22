<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // session(['edwin'=>'master izzzzzzzzzzzzznstructor']);
       // echo $request->session()->get('edwin');
//$request = session(['edwin'=>'master instructor']);

       // return view('home');

       // $request->session()->forget('edwin');

        //$request->session()->flush();

        //return $request->session()->all();


        //$request->session()->flash('message','Post has been updated');

        return $request->session()->get('message');


    }
}
