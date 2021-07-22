<?php

use App\Http\Controllers\UserController;
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

Route::get('test',function (){
   return view('auth.logout');
});

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('accident',function (){
    return view('forms.accidentForm');
})->middleware('auth');

Route::get('observation',function (){
    return view('forms.observationForm');
})->middleware('auth');

Route::get('nearmiss',function (){
    return view('forms.nearmissForm');
})->middleware('auth');

/*Route::get('profile',function (){
    return view('profile');
})->middleware('auth');*/

Route::resource('user',UserController::class)->middleware('auth');

Route::get('/', function () {
    if(Auth::check())
        return view('home');
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
