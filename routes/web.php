<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;

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

Route::get('/category/{category:slug}', [App\Http\Controllers\FrontEndController::class, 'category'])->name('website.category');

Route::get('/tag/{tag:slug}', [App\Http\Controllers\FrontEndController::class, 'tag'])->name('website.tag');

Route::get('/post/{post:slug}', [App\Http\Controllers\FrontEndController::class, 'singlePost'])->name('website.post');

Route::get('/contact', [App\Http\Controllers\FrontEndController::class, 'contact'])->name('website.contact');

Route::post('/contact', [App\Http\Controllers\FrontEndController::class, 'message_send']);

// admin routes
Route::group(['prefix' =>'admin', 'middleware'=>['auth']], function(){
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->name('admin.dashboard.index');
    
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::resource('user', UserController::class);
    Route::resource('team', TeamController::class);
    Route::resource('message', MessageController::class);

    Route::get('profile', [App\Http\Controllers\UserController::class, 'profile'])
    ->name('user.profile');

    Route::post('profile', [App\Http\Controllers\UserController::class, 'profile_update'])
    ->name('user.profile_update');

    Route::get('settings', [App\Http\Controllers\SettingController::class, 'index'])
    ->name('settings.index');

    Route::post('settings/{id}', [App\Http\Controllers\SettingController::class, 'update'])
    ->name('settings.update');
    
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
