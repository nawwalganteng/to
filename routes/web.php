<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukTitipanController;




Route::get('home', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('layout.dashboard');
    })->name('dashboard');

    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('', 'index')->name('kategori');
        Route::get('create', 'create')->name('kategori.create');
        Route::post('store', 'store')->name('kategori.store');
        Route::get('show/{id}', 'show')->name('kategori.show');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::put('edit/{id}', 'update')->name('Kategori.update');
        Route::delete('destroy/{id}', 'destroy')->name('kategori.destroy');
    });

    Route::controller(JenisController::class)->prefix('jenis')->group(function () {
        Route::get('', 'index')->name('jenis');
        Route::get('create', 'create')->name('jenis.create');
        Route::post('store', 'store')->name('jenis.store');
        Route::get('show/{id}', 'show')->name('jenis.show');
        Route::get('edit/{id}', 'edit')->name('jenis.edit');
        Route::put('edit/{id}', 'update')->name('jenis.update');
        Route::delete('destroy/{id}', 'destroy')->name('jenis.destroy');
    });

    Route::controller(StokController::class)->prefix('stok')->group(function () {
        Route::get('', 'index')->name('stok');
        Route::get('create', 'create')->name('stok.create');
        Route::post('store', 'store')->name('stok.store');
        Route::get('show/{id}', 'show')->name('stok.show');
        Route::get('edit/{id}', 'edit')->name('stok.edit');
        Route::put('edit/{id}', 'update')->name('stok.update');
        Route::delete('destroy/{id}', 'destroy')->name('stok.destroy');
    });

    Route::controller(PemesananController::class)->prefix('pemesanan')->group(function () {
        Route::get('', 'index')->name('pemesanan');
    });

    Route::controller(ProdukTitipanController::class)->prefix('produk_titipan')->group(function () {
        Route::get('', 'index')->name('produk_titipan');
        Route::post('', 'store')->name('stok.store');
        Route::get('create', 'create')->name('stok.create');
        Route::get('show/{id}', 'show')->name('stok.show');
        Route::get('edit/{id}', 'edit')->name('stok.edit');
        Route::patch('/{id}', 'update')->name('stok.update');
        Route::delete('/{id}', 'destroy')->name('stok.destroy');
    });

    Route::get('export/ProdukTitipan', [ProdukTitipanController::class, 'exportData'])->name('export-ProdukTitipan');
    Route::post('ProdukTitipan/import', [ProdukTitipanController::class, 'importData'])->name('import-ProdukTitipan');

    
});