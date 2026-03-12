<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VisaRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisaRequestController as AdminVisaController;

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

Route::get('/admin-register', [AuthController::class, 'showRegister'])->name('admin.register');
Route::post('/admin-register', [AuthController::class, 'register'])->name('admin.register.store');

Route::get('/admin-login', [AuthController::class, 'showLogin'])->name('admin.login');

Route::post('/visa-request',[VisaRequestController::class,'store'])->name('visa.request');
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin.login.check');

Route::post('/admin-logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/visa-request/edit/{token}',[VisaRequestController::class,'edit'])->name('visa.edit');
Route::post('/visa-request/update/{token}',[VisaRequestController::class,'update'])->name('visa.update');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/visa-requests',[AdminVisaController::class,'index'])->name('visa.index');
        Route::delete('/visa-requests/{id}',[AdminVisaController::class,'destroy'])->name('visa.delete');

    Route::post('/visa-requests/{id}/reply',[AdminVisaController::class,'sendReply'])->name('visa.reply');
      

});
