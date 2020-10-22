<?php

namespace App\Http\Controllers;

use App\User;
use App\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{

    public function message()
    {


        $messages = [];

        $to = null;

        $users = User::all();

        $conversations = Conversation::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get();

        return view('backend.messages')->with("messages", $messages)->with("chats", $conversations)->with("to", $to)->with('users', $users);
    }
}
