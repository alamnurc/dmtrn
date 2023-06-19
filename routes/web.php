<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\RingkasTugasController;
use App\Http\Controllers\RingkasInternController;
use App\Http\Controllers\RingkasIzinController;
use App\Http\Controllers\RingkasPresensiController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RingkasanController;
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


//=========================================================================================//
//                                      USER                                               //                                
//=========================================================================================//


Route::get('/', [WelcomeController::class,'index'])
    ->name('welcome');

Route::get('/login', [LoginController::class,'index'])
    ->name('login');

Route::get('/home', [HomeController::class,'index'])
    //->middleware(['auth'])
    ->name('home');

// Route::get('/home', [RingkasanController::class,'index'])
// ->middleware(['admin'])
// ->name('index');


    Route::get('/tugas', [TugasController::class,'index'])
    // ->middleware(['auth','admin'])
    ->name('tugas');

    Route::get('/tugas/create', [TugasController::class,'create'])
    // ->middleware(['auth','admin'])
    ->name('tugas.create');

    Route::post('/tugas/store', [TugasController::class,'store'])
    // ->middleware(['auth','admin'])
    ->name('tugas.store');

    Route::delete('tugas/{items}', [TugasController::class,'destroy'])
    // ->middleware(['auth','admin'])
    ->name('tugas.destroy');




// Route::get('/presensi', [PresensiController::class,'index'])->name('presensi');
// ->middleware(['auth','admin'])

Route::get('/presensi', [PresensiController::class,'index'])
// ->middleware(['auth','admin'])
->name('presensi');

Route::get('/presensi/create', [PresensiController::class,'create'])
// ->middleware(['auth','admin'])
->name('presensi.create');

Route::post('/presensi/store', [PresensiController::class,'store'])
// ->middleware(['auth','admin'])
->name('presensi.store');

Route::post('/presensi/store', [PresensiController::class,'store'])
    // ->middleware(['auth','admin'])
    ->name('presensi.store');



Route::get('/izin', [IzinController::class,'index'])
    // ->middleware(['auth','admin'])
    ->name('izin');

Route::get('/izin/create', [IzinController::class,'create'])
    // ->middleware(['auth','admin'])
    ->name('izin.create');

Route::post('/izin/store', [IzinController::class,'store'])
    // ->middleware(['auth','admin'])
    ->name('izin.store');

Route::delete('izin/{items}', [IzinController::class,'destroy'])
    // ->middleware(['auth','admin'])
    ->name('izin.destroy');


Route::get('/users', 'UserController@index');




//=========================================================================================//
//                                      ADMIN                                              //                                
//=========================================================================================//

Route::prefix('admin')->middleware(['auth', 'isAdmin'])
    ->group(function(){


        Route::get('/ringkas-home', [RingkasanController::class,'index'])
        // ->middleware(['auth','admin'])
        ->name('ringkas-home');
    
     
    
        Route::get('/ringkas-rekap', [RingkasTugasController::class,'index'])
        // ->middleware(['auth','admin'])
        ->name('ringkas-rekap');
    
    
    
        Route::get('/ringkas-izin', [RingkasIzinController::class,'index'])
        // ->middleware(['auth','admin'])
        ->name('ringkas-izin');    
    
    
    
        Route::get('/ringkas-presensi', [RingkasPresensiController::class,'index'])
        // ->middleware(['auth','admin'])
        ->name('ringkas-presensi');
    
    
    
        Route::get('/ringkas-intern', [RingkasInternController::class,'index'])
        // ->middleware(['auth','admin'])
        ->name('ringkas-intern');

    });

//=========================================================================================//





// Route::middleware('admin')->group( function () {

    
// });

    Route::get('/profil', [ProfilController::class,'index'])
    // ->middleware(['auth','admin'])
    ->name('profil');


Auth::routes();
