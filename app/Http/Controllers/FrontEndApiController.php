<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Resources\Task\TaskResource;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Hustlancers\HustlancerResource;

class FrontEndApiController extends Controller
{
    // ################################ get all tasks ###############################endregion
    public function gettasks()
    {


        return (TaskResource::collection(Task::where("status", "pending")->paginate(10)));
    }

    // ##################################### get a single task ############################endregion
    // public function singletask($slug){

    //     return $slug;
    // }

    public function gethustlancers()
    {
        return HustlancerResource::collection(User::where('role', 'hustlancer')->get());
    }
    public function getcategories()
    {

        return CategoryResource::collection(Category::all());
    }

    public function jobsearch(Request $request)
    {


        $tasks = Task::where("category_id", "LIKE", '%' . $request->category . '%')->where("location", "LIKE", '%' . $request->location . '%')->where("title", "LIKE", "%" . $request->input("query") . "%")->where("status", "pending")->paginate(10);
        return TaskResource::collection($tasks);
    }

    public function usersearch(Request $request)
    {

        $users = User::where("name", "LIKE", "%" . $request->name . "%")->where("location", "LIKE", "%" . $request->location . "%")->get();
        return HustlancerResource::collection($users);
    }
}
