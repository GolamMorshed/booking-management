<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareHomeController;

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
    return view('welcome');
});


Route::get('/dashboard',function(){
    return view('admin.dashbard');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/care_home',function(){
//     return view('admin.homes');
// });
// Route::post('/create_home',[CareHomeController::class, 'store'])->name('add_home');

Route::resource('/care_homes', CareHomeController::class)->middleware(['auth']);