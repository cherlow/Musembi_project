<?php

namespace App\Http\Controllers;

use App\Http\Resources\Hustlancers\HustlancerResource;
use App\Http\Resources\Task\TaskResource;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class FrontEndApiController extends Controller
{
    // ################################ get all tasks ###############################endregion
    public function gettasks(){
        
        return TaskResource::collection(Task::paginate(10));
    }

    // ##################################### get a single task ############################endregion
    // public function singletask($slug){

    //     return $slug;
    // }

    public function gethustlancers(){
        return HustlancerResource::collection(User::where('role','hustlancer')->get());
    }
}
