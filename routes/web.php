<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontEndController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('website.index');

Route::get('/about', [App\Http\Controllers\FrontEndController::class, 'about'])->name('website.about');

Route::get('/category', [App\Http\Controllers\FrontEndController::class, 'category'])->name('website.category');

Route::get('/post/{slug}', [App\Http\Controllers\FrontEndController::class, 'singlePost'])->name('website.post');

Route::get('/contact', [App\Http\Controllers\FrontEndController::class, 'contact'])->name('website.contact');



// admin routes
Route::group(['prefix' =>'admin', 'middleware'=>['auth']], function(){
    Route::get('dashboard', function(){
        return view('admin.dashboard.index');
    })->name('admin.dashboard.index');
    
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
