<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginView() {
        return view('login');
    }

    public function signupView() {
        return view('signup');
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required!unique|email',
            'password' => 'required|min:6',
        ]);
    }

    public function signup(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->user_type = 0;
        $user->password = Hash::make($validated['password']);
        if ($user->save()) {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}
