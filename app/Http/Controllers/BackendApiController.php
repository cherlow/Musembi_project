<?php

namespace App\Http\Controllers;


use App\Attachment;
use App\Category;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Skill\SkillResource;
use App\Http\Resources\Task\TaskResource;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use App\Skill;
use App\Task;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;

class BackendApiController extends Controller
{
    public function __construct(){
$this->middleware('auth:api');
    }

// ##################################### fetch my acount data #################################### 
    public function myaccount (Request $request){
        return new UserResource($request->user()); 
    }

// #################################### add user skills #########################################


    public function adduserskill (Request $request){

      $skill= Skill::where('name',$request->skill)->first();

      //skill already exists in skills table
  if($skill){

    $userskill=$request->user()->skills->where('name',$skill->name);

    // skill in user_skill table
    if(count($userskill) > 0){
         

 return SkillResource::collection(Auth::user()->skills);

    }
    // skill not in skill_user table
  else{
    
    $request->user()->skills()->save($skill);
  
    return SkillResource::collection(Auth::user()->skills);
  }

  }
  //skill doesnt exist in skills table
  else{
      $newskill= new Skill();
      $newskill->name=$request->skill;
      $newskill->save();
      $request->user()->skills()->save($newskill);
     
      return SkillResource::collection(Auth::user()->skills);

  }
        
    }


    // ################################################# change user avatar #################################

    public function changeavatar(Request $request){
      if($request->hasFile('file')){

       $user= Auth::user();
  // get filename with extension
  $fileNameWithExtension=$request->file('file')->getClientOriginalName();
  // get just file name
  $fileName=pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
  // get just extension
  $extension=$request->file('file')->getClientOriginalExtension();
  // file name to Store
  $fileNameToStore=$fileName.'_'.time().'.'.$extension;
  // upload the image
  $path=$request->file('file')->storeAs('public/userprofiles',$fileNameToStore);

  $user->cover_pic=$fileNameToStore;
  $user->save();

  return response(asset('storage/userprofiles/'.Auth::user()->cover_pic));

  
       
    }
else{
    return response("oops..there was an error");
}
  }


  // ############################### update user account ##########################################endregion

  public function updateuser(Request $request){
    $user=Auth::user();
    if($request->hasFile('attachments')){
// get filename with extension
$fileNameWithExtension=$request->file('attachments')->getClientOriginalName();
// get just file name
$fileName=pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
// get just extension
$extension=$request->file('attachments')->getClientOriginalExtension();
// file name to Store
$fileNameToStore=$fileName.'_'.time().'.'.$extension;
// upload the image
$path=$request->file('attachments')->storeAs('public/attachments',$fileNameToStore);
  
$attachment=new Attachment();
$attachment->attachment_name=$fileName;
$attachment->attachment_link=$fileNameToStore;
$request->user()->attachments()->save($attachment);
      
      $user->role=$request->input('account_type');
      $user->rate=$request->input('rate');
      $user->mobile=$request->input('mobile');
      $user->tagline=$request->input('tagline');
      $user->location=$request->input('nationality');
      $user->description=$request->input('bio');
      $user->save();

      return new UserResource($request->user()); 
  }
  else{
    $user=Auth::user();
      $user->role=$request->input('account_type');
      $user->rate=$request->input('rate');
      $user->mobile=$request->input('mobile');
      $user->tagline=$request->input('tagline');
      $user->location=$request->input('nationality');
      $user->description=$request->input('bio');
      $user->save();
      return new UserResource($request->user()); 
  }
  }


  // ############################## new task post ###########################################endregion

  public function newtask(Request $request){
    
   $skillarray=json_decode($request->skills);
    $category=Category::where("name",$request->input('category'))->first();
   $task=new Task();
   $task->title=$request->input('name');
   $task->description=$request->input('description');
   $task->category_id=$category->id;
   $task->min_budget=$request->input('min_budget');
   $task->max_budget=$request->input('max_budget');
   $task->mode=$request->input('mode');
   $task->location=$request->input('location');
   Auth::user()->tasks()->save($task);

   foreach($skillarray as $skill){
     $newskill=Skill::find($skill->id);

     $task->skills()->save($newskill);

   }

   return new TaskResource($task);


  }

  // ######################### add a skill to a post ##########################endregion
  public function newskill(Request $request){
   

    $skill= Skill::where('name',$request->skill)->first();
    
    // skill exist in skills table
    if($skill){
      return new SkillResource($skill);
    }
//skill not in skills table
    else{

      $skill=new Skill();
      $skill->name=$request->skill;
      $skill->save();

      return new SkillResource($skill);
      

    }

  }

  // ############################################## get categories ############################endregion

  public function getcategories(){

    return CategoryResource::collection(Category::all());
  }

  // ######################################## add multiple attachments to a task ####################endregion

  public function uploadtaskattachments(Request $request){

    $task=Task::find($request->input('task'));
    // get filename with extension
$fileNameWithExtension=$request->file('attachments')->getClientOriginalName();
// get just file name
$fileName=pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
// get just extension
$extension=$request->file('attachments')->getClientOriginalExtension();
// file name to Store
$fileNameToStore=$fileName.'_'.time().'.'.$extension;
// upload the image
$path=$request->file('attachments')->storeAs('public/attachments',$fileNameToStore);
  
$attachment=new Attachment();
$attachment->attachment_name=$fileName;
$attachment->attachment_link=$fileNameToStore;

$task->attachments()->save($attachment);


  }
}
