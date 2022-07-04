<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\WelcomeController;

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
})->name('accueil');
Route::get('/', [WelcomeController::class, 'affiche'])->name('accueil');
Route::get('/car', [CarController::class, 'index'])->name('car');
Route::get('/car/create', [CarController::class, 'create'])->name('car.create');
Route::get('/car/{car}', [CarController::class, 'edit'])->name('car.edit');
Route::post('/car/create', [CarController::class, 'store'])->name('car.ajouter');
Route::delete('/car/{car}', [CarController::class, 'delete'])->name('car.supprimer');
Route::put('/car/{car}', [CarController::class, 'update'])->name('car.update');
// Route::resource('cars', 'App\Http\Controllers\CarController');
