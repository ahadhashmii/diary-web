<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    public function index() {
        if (session()->has('user')) {
            $id = session('user')['id'];
            $notes = Note::with('favorite')->where('user_id', $id)->get();
            return view('favorites', ['notes' => $notes]);
        }else {
            return view('favorites', ['notes' => []]);
        }
    }

    public function addFav($id) {
        $uid = session('user')['id'];
        $f = Favorite::where('note_id', $id)->where('user_id', $uid)->first();
        if (!is_null($f)) {
            Favorite::find($f->id)->delete();
            return back();
        }
        $fav = new Favorite();
        $fav->note_id = $id;
        $fav->user_id = $uid;
        if ($fav->save()) {
            return back();
        }else {
            return back()->withErrors('Something went wrong.');
        }
    }
}
