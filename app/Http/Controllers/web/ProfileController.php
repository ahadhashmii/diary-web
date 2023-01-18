<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index() {
        return view('profile');
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'email|required'
        ]);

        $id = session('user')['id'];
        $user = User::find($id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if ($request->hasFile('image')) {
            $img = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/users');
            $user->image = $path;
        }
        
        if ($user->save()) {
            session()->put('user', $user);
            return redirect('/profile');
        }else {
            return errors();
        }
    }

    public function logout() {
        session()->forget('user');
        return redirect('/');
    }
}
