<?php

use App\Http\Controllers\Auth\CategoryController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\Auth\TagController;
use App\Http\Controllers\site\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/logout', function () {
    auth()->logout();
    // return view('welcome');
});

// Route::view('/theme','auth.dashbord');

Auth::routes([
    'register' => true
]);

Route::get('dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

Route::resource('auth/posts',PostController::class);

Route::get('auth/categories',[CategoryController::class,'openCategoriesPage'])->name('auth.categories');
Route::get('auth/tags',[TagController::class,'openTagPage'])->name('auth.tags');

Route::get('/', [ BlogController::class, 'index' ])->name('home');
Route::get('single-blog/{id}', [ BlogController::class, 'OpenSingleBlog' ])->name('single-blog');
// Route::get('/tag/{id}', [TagController::class, 'show'])->name('tagged');

