<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Task\TaskResource;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\Hustlancers\HustlancerResource;

class PagesController extends Controller
{
    public function index()
    {
        $jobs = TaskResource::collection(Task::orderBy('id', "desc")->get());
        $users = UserResource::collection(User::orderBy("id", "desc")->get());
        return view('pages.index')->with("users", $users)->with("jobs", $jobs);
    }
    public function hustlancers()
    {
        return view('pages.hustlancers');
    }
    public function singlehustlancer($name)
    {

        
        $user = User::where('name', $name)->first();
        // return $user->reviews()->get();
        return view('pages.singlehustlancer')->with('user', $user)->with('resource', new HustlancerResource($user));
    }
    public function tasks()
    {
        return view('pages.tasks');
    }

    public function featuredjobs()
    {
        return view('pages.featuredjobs');
    }
    public function singlefeaturedjob()
    {
        return view('pages.singlefeaturedjob');
    }
}
