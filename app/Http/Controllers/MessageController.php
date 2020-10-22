<?php

namespace App\Http\Controllers;

use App\User;
use App\Conversation;
use Inani\Messager\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $messages = [];

        $to = null;

        $users = User::all();

        $conversations = Conversation::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get();
        return view("backend.usermessages")->with("messages", $messages)->with("chats", $conversations)->with("to", $to)->with('users', $users);
    }


    public function messaging($name)
    {
        $users = User::all();
        $to = User::where('name', $name)->first();

        $id = $to->id;



        $messages = Message::where(function ($query) use ($id) {
            $query->where('from_id', Auth::id())
                ->where('to_id', $id);
        })->orWhere(function ($query) use ($id) {
            $query->where('to_id', Auth::id())
                ->where('from_id', $id);
        })->orderBy('created_at', 'asc')->orderBy('updated_at', 'asc')->get();



        $conversations = Conversation::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get();


        if (auth()->user()->role == "hustlancer") {
            return view("backend.usermessages")->with("messages", $messages)->with("chats", $conversations)->with("to", $to)->with("users", $users);
        } else {
            return view("backend.messages")->with("messages", $messages)->with("chats", $conversations)->with("to", $to)->with("users", $users);
        }
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
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }

    public function mcreate(Request $request, User $user)
    {
        // return $user;

        // return $conversation;
        $receiver = $user;





        $conversation = Conversation::where(function ($query) use ($user) {
            $query->where('from_id', Auth::id())
                ->where('to_id', $user->id);
        })->orWhere(function ($query) use ($user) {
            $query->where('to_id', Auth::id())->where('to_id', $user->id);
        })->first();

        if ($conversation == null) {

            $conversation = new Conversation();
            $conversation->to_id = $user->id;
            $conversation->from_id = Auth::id();
            $conversation->last_message = $request->message;
            // return $conversation;
            $conversation->save();
        }


        //

        $conversation->last_message = $request->message;

        $conversation->save();


        // Message Data
        $messageData = [
            'content' => $request->message, // the content of the message
            'to_id' => $receiver->getKey(), // Who should receive the message
        ];

        list($message, $user) = User::createFromRequest($messageData);


        $sender = User::find(auth()->user()->id);

        $sent = $sender->writes($message)
            ->to($user)
            ->send();



        return redirect('/messages/' . $user->name);
    }
}
