<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    public function index() {
        if (session()->has('user')) {
            $id = session('user')['id'];
            $notes = Note::with('favorite')->where('user_id', $id)->get();
            return view('notes', ['notes' => $notes]);
        }else {
            return view('notes', ['notes' => []]);
        }
    }

    public function details($id) {
        $note = Note::with('favorite')->where('id', $id)->first();
        return view('details');
    }
}
