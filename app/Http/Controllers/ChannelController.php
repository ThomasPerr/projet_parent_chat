<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Communaute;
use Illuminate\Support\Facades\Auth;

class ChannelController extends Controller
{
    public function index()
    {
        $users = Auth::user();   
        $communautes = Communaute::all();
        $channels = Channel::all();
        return view('channel')->with('users' , $users)->with('channels', $channels)->with('communautes', $communautes);
    }
}
