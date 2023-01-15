<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index() {
        return view('create');
    }

    public function create(Request $req) {
        
    }
}
