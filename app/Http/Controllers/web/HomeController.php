<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        if (session()->has('user')) {
            $id = session('user')['id'];
            $notes = Note::with('favorite')->where('user_id', $id)->get();
            return view('home', ['notes' => $notes]);
        }else {
            return view('home', ['notes' => []]);
        }
    }
}
