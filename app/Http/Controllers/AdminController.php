<?php

namespace App\Http\Controllers;

use App\Job;
use App\Task;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function jobs()
    {
        $jobs = Task::all();

        return view("admin.jobs")->with('jobs', $jobs);
    }


    public function jobsshow(Task $task)
    {

        return view("admin.jobshow")->with("job", $task);
    }

    public function users()
    {

        $users = User::where("role", "hustlancer")->get();

        return view("admin.users")->with("users", $users);
    }

    public function usersshow(User $user)
    {
        return view("admin.usershow")->with("user", $user);
    }

    public function employers()
    {


        $users = User::where("role", "employer")->get();

        return view('admin.employers')->with("users", $users);
    }

    public function employersshow(User $user)
    {

        return view('admin.employersshow')->with("user", $user);
    }

    public function categories()
    {
        $categories = Category::all();
        return view("admin.categories")->with("categories", $categories);
    }

    public function addcategory(Request $request)
    {


        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('details');
        $category->save();
        toastr()->success('category created successfully');
        return redirect('/admin/categories');
    }

    public function deletecategory(Category $category)
    {



        $category->delete();

        toastr()->success('category deleted successfully');

        return redirect('/admin/categories');
    }
}
