<?php

namespace App\Http\Controllers;

use App\Models\Communaute;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
/*use Illuminate\Support\Facades\Request;*/
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users = Auth::user();   
        $communautes = Communaute::all();
        $messages = Message::all();
        return view('chat')->with('users' , $users)->with('communautes' , $communautes)->with ('messages', $messages);
    }
    
    public function fetchMessages()
{
    $users = Auth::user();
    $communautes = Communaute::all();
    $posts = Message::orderBy('created_at', 'desc')->get();
    return view('chat')-> with('posts', $posts)->with('users', $users)->with('communautes', $communautes);
}


    public function sendMessage(Request $request)
{
    
   /* $this->validate($request, [
        'texte' => 'required|max:1000'
    ]);
    
    $users = Auth::user();
    $communautes = Communaute::all();
    $post = new Message();
    $post->texte = $request['texte'];
    $message = 'There vas an error';
    if ($request->user()->texte->save($post)) {
        $message = 'Message envoyé avec succès !';
    }
    return redirect()->route('chat')->with(['message' => $message])-> with('users',$users) ->with('communautes', $communautes);*/
    $users = Auth::user();
    $communautes = Communaute::all();
    
    $posts = new Message;
    
    $posts->texte = $request->texte;
    
    $posts->save();
    
    return redirect()->route('chat')-> with('posts',$posts)-> with('users',$users)->with('communautes', $communautes);
}
}
