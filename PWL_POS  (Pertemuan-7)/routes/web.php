<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/adminlte', function () {
    return view('welcome_admin_lte');
});

Route::get('/template', function () {
    return view('layouts.template');
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::post('/list', [UserController::class, 'list'])->name('user.list');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
    Route::get('/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    
});

Route::group(['prefix' => 'level'], function(){
    Route::get('/', [LevelController::class, 'index']);
    Route::get('/create', [LevelController::class, 'create'])->name('level.create');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('/create', [UserController::class, 'create'])->name('user.create');

});

Route::group(['prefix' => 'kategori'], function(){
    Route::get('/', [KategoriController::class, 'index']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('', [KategoriController::class, 'store']);
    Route::get('/edit/{id}', [KategoriController::class, 'editCategory']);
    Route::post('/edit/{id}', [KategoriController::class, 'storeCategory']);
    Route::get('/delete/{id}', [KategoriController::class, 'deleteCategory'])->name('kategori.delete');
});

Route::resource('m_user', POSController::class);

