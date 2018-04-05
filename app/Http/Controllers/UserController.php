<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view ('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'name' => 'required|string|max:255,name,' . $user->id,
            'lastname' => 'required|string|max:255,lastname' . $user->id,
        ]);
        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'lastname' => $request->lastname,
        ]);
        return back()->with(['ok' => __('Le profil a bien été mis à jour')]);
    }
}
