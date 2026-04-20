<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\TransactionsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;


Route::get('/tentang', function () {
    return '<h1>Ini adalah Halaman Tentang Aplikasi Event Hub</h1>';
});

Route::get('/kontak', function () {
    return view('contact');
});

// Tiga route tambahan sesuai permintaan
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

// Route home untuk memudahkan navigasi
Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/events', function () {
    return view('admin.events');
});

Route::get('/transaction', function () {
    return view('admin.transaction');
});

Route::get('/app', [HomeController::class,'index']);

Route::get('/event-detail', [EventController::class, 'show']);
Route::get('/checkout', [EventController::class, 'checkout']);
Route::get('/ticket', [TicketController::class, 'show']);

Route::group(['prefix' => 'admin', 'as' =>'admin.' ],function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/events', [EventsController::class, 'index'])->name('events');
    Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions');
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
});
