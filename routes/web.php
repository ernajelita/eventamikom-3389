<?php

use Illuminate\Support\Facades\Route;

// Import Controller User/Public
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;

// Import Controller Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\TransactionsController;
use App\Http\Controllers\Admin\EventController as EventAdminController;

/*
|--------------------------------------------------------------------------
| Public / Guest Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/app', [HomeController::class, 'index']);
Route::get('/event-detail', [EventController::class, 'show']);
Route::get('/checkout', [EventController::class, 'checkout']);
Route::get('/ticket', [TicketController::class, 'show']);

// Halaman Statis
Route::get('/tentang', function () {
    return '<h1>Ini adalah Halaman Tentang Aplikasi Event Hub</h1>';
});
Route::get('/kontak',  function () { return view('contact'); });
Route::get('/profil',  function () { return view('profil'); });
Route::get('/katalog', function () { return view('katalog'); });
Route::get('/bantuan', function () { return view('bantuan'); });


/*
|--------------------------------------------------------------------------
| Admin Routes (Prefix: admin, Name: admin.*)
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Events (Resource mencakup: index, create, store, show, edit, update, destroy)
    Route::resource('events', EventAdminController::class);

    // Transactions & Categories
    Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions');
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');

});