<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\NotesController;
use App\Http\Controllers\web\FavoritesController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\CreateController;
use App\Http\Controllers\web\UpdateController;
use App\Http\Controllers\web\ProfileController;
use App\Http\Controllers\web\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/notes', [NotesController::class, 'index']);

Route::get('/favorites', [FavoritesController::class, 'index']);

Route::get('/add-fav/{id}', [FavoritesController::class, 'addFav']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/create', [CreateController::class, 'index']);

Route::post('/create', [CreateController::class, 'create']);

Route::get('/update', [UpdateController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::post('/profile/update', [ProfileController::class, 'update']);

Route::get('/logout', [ProfileController::class, 'logout']);

Route::get('/login', [AuthController::class, 'loginView']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', [AuthController::class, 'signupView']);

Route::post('/signup', [AuthController::class, 'signup']);
