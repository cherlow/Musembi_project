<?php

namespace App\Http\Controllers;

use toastr;
use App\Task;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //  return auth()->user()->reviews()->get();

        $reviews = auth()->user()->reviews()->get();



        $tasks = auth()->user()->tasks->where("status", "done")->where("user_reviewed", null);

        return view("backend.dashboardreviews")->with("tasks", $tasks)->with("reviews", $reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */



    public function userreviews()
    {
        $reviews = auth()->user()->reviews()->get();
        $tasks = Task::where("developer_id", auth()->user()->id)->where("employer_reviewed", null)->get();
        return view("backend.userreviews")->with("tasks", $tasks)->with("reviews", $reviews);
    }


    public function leavereview(Task $task)
    {

        return view("backend.reviewpage")->with("task", $task);
    }

    public function userleavereview(Task $task)
    {

        return view("backend.userreviewpage")->with("task", $task);
    }
    public function postreview(Request $request, Task $task)
    {
        $developer = $task->developer;

        $user = auth()->user();

        $task->user_reviewed = true;
        $task->save();



        $developer->makeReview($user, $request->rating, $request->review);

        toastr()->success("Your review was submitted successfully");
        return redirect("/reviews");
    }

    public function userpostreview(Request $request, Task $task)
    {
        $developer = $task->user;

        $user = auth()->user();

        $task->employer_reviewed = true;
        $task->save();



        $developer->makeReview($user, $request->rating, $request->review);

        toastr()->success("Your review was submitted successfully");
        return redirect("/userreviews");
    }
}
