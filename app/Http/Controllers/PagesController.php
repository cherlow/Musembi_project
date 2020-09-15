<?php

namespace App\Http\Controllers;

use App\Http\Resources\Hustlancers\HustlancerResource;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function hustlancers(){
        return view('pages.hustlancers');
    }
    public function singlehustlancer($name){
        
        $user=User::where('name',$name)->first();
        return view('pages.singlehustlancer')->with('user',$user)->with('resource',new HustlancerResource($user));
    }
    public function tasks(){
        return view('pages.tasks');
    }
    
    public function featuredjobs(){
        return view('pages.featuredjobs');
    }
    public function singlefeaturedjob(){
        return view('pages.singlefeaturedjob');
    }
}
