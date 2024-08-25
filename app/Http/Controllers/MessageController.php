<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function new(Request $request){
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
            'numero' => 'required'
        ]);
        $message = new Message();
        $message->email = $request->email;
        $message->message = $request->message;
        $message->numero = $request->numero;
        $message->save();
        return redirect()->back()->with('success','Message envoyer nous vous contacterons par mail ou sur Whatssap');
    }

    public function get(){
        $messages = Message::orderBy('created_at','desc')->get();
        return view('admin.listMessage',compact('messages'));
    }
}
