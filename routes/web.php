<?php

use App\Http\Controllers\DemandeController;
use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\HebergeurController;
use App\Http\Controllers\UserController;
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
})->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware("auth");
Route::resource('hebergeur', controller: HebergeurController::class)->middleware("auth");
Route::resource('demandeur', controller: DemandeurController::class)->middleware("auth");
Route::resource('demande', controller: DemandeController::class)->middleware("auth");
Route::resource('user', UserController::class)->middleware(['auth', 'admin']);
Route::get('/modifier/motdepasse',[UserController::class,'modifierMotDePasse'])->name("modifier.motdepasse")->middleware(['auth']);
Route::post('/update/password',[UserController::class,'updatePassword'])->name("user.password.update")->middleware(["auth"]);
Route::post('/store_acc',[DemandeController::class,'store_acc'])->name("store_acc")->middleware(["auth"]);
Route::post('/store/enqueteur',[DemandeController::class,'storeEnqueteur'])->name("storeEnqueteur")->middleware(["auth"]);

Route::get('/view/edit/form/{id}',[DemandeController::class,'viewEditForm'])->name("viewEditForm")->middleware(['auth']);

