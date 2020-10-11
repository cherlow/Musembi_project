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
    public function index()
    {



        // check for roles goes here


        if (auth()->user()->role == "hustlancer") {

            return view("backend.userdashboard");
        } else if (auth()->user()->role == "employer") {
            return view('backend.dashboard');
        }
        else{
            return view('backend.admindashboard');
        }
    }
}
