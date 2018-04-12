<?php

namespace App\Http\Controllers;

use App\Models\Communaute;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $users = Auth::user();   
        $communautes = Communaute::all();
        return view('chat')->with('users' , $users)->with('communautes' , $communautes);
    }
}
