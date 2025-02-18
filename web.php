<?php

use App\Http\Controllers\AdminControler;
use App\Http\Controllers\HomeController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get(uri: '/home',action: [AdminControler::class,'index'])->name(name: 'home');

route::get(uri: '/',action: [AdminControler::class,'home']);
route::get(uri: '/home',action: [AdminControler::class,'index'])->name(name: 'home');
route::get('/create_kamar',[AdminControler::class,'create_kamar']);
route::post('/tambah_kamar',[AdminControler::class,'tambah_kamar']);
route::get('/data_kamar',[AdminControler::class,'data_kamar']);
route::get('/kamar_update/{id}',[AdminControler::class,'kamar_update']);
route::post('/edit_kamar/{id}',[AdminControler::class,'edit_kamar']);
route::get('/kamar_delete/{id}',[AdminControler::class,'kamar_delete']);
route::get('/room_detail/{id}',[HomeController::class,'room_detail']);
route::post('/add_booking/{id}',[HomeController::class,'add_booking']);
route::get('/data_booking',[AdminControler::class,'data_booking']);
route::get('/booking_update/{id}',[AdminControler::class,'booking_update']);
route::post('/edit_booking/{id}',[AdminControler::class,'edit_booking']);
route::get('/booking_delete/{id}',[AdminControler::class,'booking_delete']);