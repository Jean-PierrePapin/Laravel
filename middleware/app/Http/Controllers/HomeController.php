<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        
        $request->session()->put(['Samuel' => 'instructor']);

        //session(['peter' => 'student']);

        return $request->session()->all();

        //echo $request->session()->get('Samuel');

        

        //return view('home');
    }
}
