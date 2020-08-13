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

        /**
         * Add a session
         */
        //session(['Samuel2' => 'Your freelancer']);

        //return session('Samuel2');

        /**
         * Deleting one session or all of them
         */

        //$request->session()->forget('Samuel2');


        //$request->session()->flush();

        //return $request->session()->all();

        //return $request->session()->all();

        /**
         * Get a session
         */

        //echo $request->session()->get('Samuel');

        /**
         * Flashing data
         */        

        //$request->session()->flash('message', 'Post has been created');

        //return $request->session()->get('message');

        $request->session()->reflash();

        $request->session()->keep()'message';


        //return view('home');
    }
}
