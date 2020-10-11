<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Resources\Task\TaskResource;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.myaccount');
    }

    public function useraccount(){

        return view("backend.useraccount");

    }

    public function samp(){


        return ( TaskResource::collection(Task::paginate(10)));
    }
}
