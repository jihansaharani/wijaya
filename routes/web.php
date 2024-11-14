<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileCompany;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApprovalLowonganController;

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

//LOGIN
Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginRegisterController::class, 'actionlogin'])->name('actionlogin');

Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
Route::post('registeruser', [LoginRegisterController::class, 'registeruser'])->name('registeruser');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');

//LandingPage
Route::get('/home', [ProfileCompany::class, 'home']);
Route::get('/about', [ProfileCompany::class, 'about']);
Route::get('/kontak', [ProfileCompany::class, 'kontak']);
Route::get('/faq', [ProfileCompany::class, 'faq']);
Route::get('/snk', [ProfileCompany::class, 'snk']);
Route::get('/loker', [ProfileCompany::class, 'loker']);

Route::middleware(['user', 'prevent-back-history'])->group(function (){
        Route::get('/detailloker/{id}', [LokerController::class, 'show'])->name('detailloker.show');
        Route::post('/applyloker', [LokerController::class, 'applyloker'])->name('applyloker');
        //Pesan masukan di halaman Kontak
        Route::post('/actionmasukan', [ProfileCompany::class, 'actionmasukan'])->name('actionmasukan');
        Route::get('/profileuser',[AdminController::class,'profileuser'])->name('profileuser');
    });

    Route::middleware(['admin', 'prevent-back-history'])->group(function (){
        Route::get('/beranda', [AdminController::class, 'beranda'])->name('beranda');
        Route::get('/pengguna', [AdminController::class, 'pengguna']);
        Route::get('/applyer', [AdminController::class, 'applyer']);
        Route::get('/diterima', [AdminController::class, 'diterima']);
        Route::get('/pending', [AdminController::class, 'pending']);
        Route::get('/profileadmin', [AdminController::class, 'profileadmin']);
        Route::post('/updateprofileadmin/{id}', [AdminController::class, 'updateprofileadmin'])->name('updateprofileadmin');
        Route::patch('/applyer/approve/{id}', [AdminController::class, 'approve'])->name('applyer.approve');
        Route::patch('/applyer/reject/{id}', [AdminController::class, 'reject'])->name('applyer.reject');
        Route::get('/managementweb', [AdminController::class, 'managementweb']);
        Route::put('/updateweb', [AdminController::class, 'updateweb'])->name('updateweb');
        Route::get('/tambahlowongan', [AdminController::class, 'tambahlowongan'])->name('Admin.tambahlowongan');
        Route::post('/createlowongan', [AdminController::class, 'createlowongan'])->name('createlowongan');
        Route::get('/editloker/{id}', [AdminController::class, 'editloker'])->name('editloker');
        Route::put('/updateloker/{id}', [AdminController::class, 'updateloker'])->name('Admin.updateLowongan');
        Route::delete('/hapusloker/{id}', [AdminController::class, 'hapusloker'])->name('hapusloker');
        Route::get('/download/{file}', [AdminController::class, 'download'])->name('download');
        Route::get('/downloaddata', [AdminController::class, 'downloaddata'])->name('downloaddata');
        Route::get('/posisi', [AdminController::class, 'posisi'])->name('posisi');
        Route::get('/tambahposisi', [AdminController::class, 'tambahposisi'])->name('tambahposisi');
        Route::post('/createposisi', [AdminController::class, 'createposisi'])->name('createposisi');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
