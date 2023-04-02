<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\KulinerController;
use GuzzleHttp\Middleware;
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
    return view('home');
});

Route::get('/layout', function () {
    return view('admin.layouts.master');
});

Route::get('/register', [AuthController::class, 'tampilregister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login', [AuthController::class, 'tampillogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/home', function () {return view('home');})->name('home');
Route::get('/pagedestinasi', [DestinationController::class, 'lihat'])->name('pagedestinasi');

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
    Route::prefix('destinasi')->name('destinasi.')->group(function () {
        Route::get('', [DestinationController::class, 'index'])->name('index');
        Route::get('/create', [DestinationController::class, 'create'])->name('create');
        Route::post('', [DestinationController::class, 'tambahdestinasi'])->name('tambah');
        Route::get('/destinasi/{id}', [DestinationController::class, 'edit'])->name('edit');
        Route::put('/destinasi/{id}', [DestinationController::class, 'update'])->name('update');
        Route::delete('/destinasi/{id}', [DestinationController::class, 'delete'])->name('delete');

        Route::prefix('{id}/images')->name('images.')->group(function () {
                    Route::get('', [DestinationController::class, 'images'])->name('index');
                    Route::get('create', [DestinationController::class, 'createImage'])->name('create');
                    Route::post('', [DestinationController::class, 'storeImage'])->name('store');
                    
                });

    });
});



// Route::middleware(['auth'])->group(function () {
//     Route::get('/destinasi/create', [DestinationController::class, 'create'])->name('destinasi.create');
//     Route::post('/destinasi', [DestinationController::class, 'tambahdestinasi'])->name('destinasi.tambah');
    
//     Route::get('/destinasi/{id}', [DestinationController::class, 'edit'])->name('destinasi.edit');
//     Route::put('/destinasi/{id}', [DestinationController::class, 'update'])->name('destinasi.update');
//     Route::delete('/destinasi/{id}', [DestinationController::class, 'delete'])->middleware('apakahadmin')->name('destinasi.delete');


//     Route::prefix('destinasi/images/{id}')->name('images.')->group(function () {
//         Route::get('', [DestinationController::class, 'images'])->name('index');
//         Route::get('create', [DestinationController::class, 'createImage'])->name('create');
//         Route::post('', [DestinationController::class, 'storeImage'])->name('store');
        
//     });
//     Route::get('/kuliner/create', [KulinerController::class, 'tambahkuliner'])->name('kuliner.tambah');
//     Route::get('/kuliner/kuliner', [KulinerController::class, 'index'])->name('kuliner.index');
// });

