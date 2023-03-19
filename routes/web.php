<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\KulinerController;
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
})->name('welcome');



Route::get('/register', [AuthController::class, 'tampilregister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login', [AuthController::class, 'tampillogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/home', function () {return view('home');})->name('home');
Route::get('/pagedestinasi', [DestinationController::class, 'lihat'])->name('pagedestinasi');


Route::middleware(['auth'])->group(function () {
    Route::get('/destinasi/create', [DestinationController::class, 'create'])->name('destinasi.create');
    Route::post('/destinasi', [DestinationController::class, 'tambahdestinasi'])->name('destinasi.tambah');
    Route::get('/destinasi', [DestinationController::class, 'show'])->name('destinasi.show');
    Route::get('/destinasi/{id}', [DestinationController::class, 'edit'])->name('destinasi.edit');
    Route::put('/destinasi/{id}', [DestinationController::class, 'update'])->name('destinasi.update');
    Route::delete('/destinasi/{id}', [DestinationController::class, 'delete'])->name('destinasi.delete');


    Route::prefix('destinasi/images/{id}')->name('images.')->group(function () {
        Route::get('', [DestinationController::class, 'images'])->name('index');
        Route::get('create', [DestinationController::class, 'createImage'])->name('create');
        Route::post('', [DestinationController::class, 'storeImage'])->name('store');
        
    });

    Route::get('/kuliner/kuliner', [KulinerController::class, 'show'])->name('kuliner.show');
});

