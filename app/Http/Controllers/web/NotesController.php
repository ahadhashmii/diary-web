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
            $notes = Note::with('favorite')->where('user_id', $id)->paginate(2);
            return view('notes', ['notes' => $notes]);
        }else {
            return view('notes', ['notes' => []]);
        }
    }

    public function details($id) {
        $note = Note::with('favorite')->where('id', $id)->first();
        return view('details', ['note' => $note]);
    }

    public function delete($id) {
        Note::find($id)->delete();
        return redirect('/notes');
    }

    public function show($id) {
        $categories = [
            'Nature',
            'Beauty',
            'Business'
        ];
        $note = Note::find($id);
        return view('update', [
            'note' => $note,
            'categories' => $categories
        ]);
    }

    public function update($id, Request $request) {

    }
}
