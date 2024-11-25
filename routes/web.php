<?php

use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\HebergeurController;
use App\Models\Demandeur;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('hebergeur', controller: HebergeurController::class)->middleware("auth");
Route::resource('demandeur', controller: DemandeurController::class)->middleware("auth");
