<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/{socialite}', [SocialiteController::class,'home'])->name('socialite');
Route::get('/auth/{socialite}/callback', [SocialiteController::class,'callback'])->name('socialite.callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/qr-read', function(){
    return view('qr-reader');
});
Route::get('/wtf', function(){
    return 'wtf';
});
