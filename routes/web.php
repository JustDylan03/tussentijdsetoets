<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
    Route::get('/forum/post/{postId}', [ForumController::class, 'showPost'])->name('forum.showPost');
    Route::get('/forum/create-post', [ForumController::class, 'createPost'])->name('forum.createPost');
    Route::post('/forum/store-post', [ForumController::class, 'storePost'])->name('forum.storePost');
    Route::get('/forum/all-posts', [ForumController::class, 'showAllPosts'])->name('forum.showAllPosts');
    Route::get('/forum/create-post', [ForumController::class, 'createPost'])->name('forum.createPost');
    Route::post('/forum/store-post', [ForumController::class, 'storePost'])->name('forum.storePost');
});


require __DIR__.'/auth.php';
