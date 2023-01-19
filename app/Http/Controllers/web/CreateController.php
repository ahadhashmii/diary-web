<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class CreateController extends Controller
{
    public function index() {
        $categories = [
            'Nature',
            'Beauty',
            'Business'
        ];
        return view('create', ['categories' => $categories]);
    }

    public function create(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $note = new Note();
        $note->title = $validated['title'];
        $note->description = $validated['description'];
        $note->category = $validated['category'];
        $note->user_id = session('user')['id'];
        if ($request->hasFile('image')) {
            $img = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/notes');
            $note->image = $path;
        }

        if ($note->save()) {
            return redirect('/');
        }
    }
}
