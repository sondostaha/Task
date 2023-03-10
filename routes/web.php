<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard',[UsersController::class ,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//show frindes to add
Route::get('/Add_Friends',[UsersController::class,'show_frineds'])->name('show.notf');

//add friend
Route::post('/add_user/{id}',[UsersController::class ,'add_friends'])->name('add.frined');

//show marketplace 

Route::get('/marketplace',[UsersController::class ,'marketplace'])->name('marketplace');

//show posts of this friend
Route::get('/user_posts/{id}',[UsersController::class ,'user_posts'])->name('user.posts');
require __DIR__.'/auth.php';
