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
        
        //$request->session()->put(['Samuel' => 'instructor']);

        // $request->session()->get('Samuel);


        //session(['Samuel2' => 'Your freelancer']);

        //return session('Samuel2');

        //$request->session()->forget('Samuel2');


        $request->session()->flush();

        return $request->session()->all();



        //return $request->session()->all();

        //echo $request->session()->get('Samuel');

        

        //return view('home');
    }
}
