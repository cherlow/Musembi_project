<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Category;
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

            $jobs = count(Task::where("developer_id", auth()->user()->id)->get());

            return view("backend.userdashboard")->with("jobs", $jobs);
        } else if (auth()->user()->role == "employer") {
            return view('backend.dashboard');
        } else {
            $categories = Category::all();
            $users = User::where("role", "hustlancer")->get();
            $employer = User::where("role", "employer")->get();
            $tasks = Task::where("status", "pending")->orderBy("id", "desc")->take(6)->get();
            return view('admin.home')->with("categories", $categories)->with("users", $users)->with("employers", $employer)->with("jobs", $tasks);
        }
    }
}
