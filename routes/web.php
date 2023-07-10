<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(DashboardController::class)->prefix('/home/pages')->group(function($id = null){

    Route::get('', 'page')->name('page');
    Route::post('/add_page', 'add_page')->name('add_page');
    Route::get('/switch', 'switch')->name('switch');
});

Route::controller(DashboardController::class)->prefix('/home/profil')->group(function($id = null){

    Route::get('/data_diri', 'data_diri')->name('data_diri');
    Route::post('/data_diri/up_diri', 'up_diri')->name('up_diri');
   
});
