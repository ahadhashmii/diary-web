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
        $products = DB::table('notes')
        ->join('favorites', 'notes.id', '=', 'favorites.note_id')
        ->select('notes.*', 'favorites.*')
        ->where('favorites.user_id', session('user')['id'])
        ->get();
        return $products;
        return view('favorites');
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
