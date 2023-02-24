<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('login.login');
})->name('login');
Route::post('/login/auth', [UserController::class,'authenticate']);

Route::group(['middleware' => 'auth'], function(){   
    
 Route::get('/home',function(){
    return view('navbar.navbar');
 });
});

Route::get('/logout',[UserController::class,'logout'])->name('logout');
// member
Route::group(['middleware' => 'admin',], function(){
    Route::controller(MemberController::class)->group(function(){
        Route::get('/member', 'index');
        Route::get('/member/add', 'add')->name('add');
        Route::post('/member/add', 'tambah');
        Route::post('/member/cari', 'cari')->name('ciber');
        Route::get('/member/delete/{id}', 'delete');
        Route::get('/member/update/{id}', 'edit');
        Route::post('/member/update/{id}', 'update');
    });
});

// product
Route::group(['middleware' => 'operator'], function(){
Route::controller(ProductController::class)->group(function(){
    Route::get('/product', 'index');
    Route::get('/product/add', 'tambah');
    Route::post('/product/add', 'add');
    Route::get('/product/delete/{kd_product}','delete');
    Route::get('/product/update/{kd_product}', 'edit');
    Route::post('/product/update/{kd_product}', 'update');
});
});

// kategori
Route::controller(KategoriController::class)->group(function(){
    Route::get('/kategori', 'index');
    Route::get('/kategori/add', 'tambah');
    Route::post('/kategori/add', 'add');
    Route::get('/kategori/delete/{kd_kategori}', 'delete');
    Route::get('/kategori/update/{kd_kategori}', 'edit');
    Route::post('/kategori/update/{kd_kategori}', 'update');
});
