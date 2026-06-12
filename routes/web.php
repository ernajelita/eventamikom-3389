<?php

use Illuminate\Support\Facades\Route;

// Import Controller Public
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;

// Import Controller Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\PartnerController; // ✅ Perbaiki: hapus ::class
use App\Http\Controllers\Admin\AuthController;

/*
 |--------------------------------------------------------------------------
 | 1. Public / Guest Routes
 |--------------------------------------------------------------------------
 */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/app', [HomeController::class, 'index']);
Route::get('/event-detail', [EventController::class, 'show']);
Route::get('/checkout', [EventController::class, 'checkout']);
Route::get('/ticket', [TicketController::class, 'show']);

// Halaman Informasi Statis
Route::get('/tentang', function () {
    return '<h1>Ini adalah Halaman Tentang Aplikasi Event Hub</h1>';
});
Route::get('/kontak', function () {
    return view('contact');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});

/*
|--------------------------------------------------------------------------
| 2. Admin Routes (Prefix: /admin)
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    
    // Rute Login bebas akses
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('events', EventAdminController::class);
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');

        Route::get('categories', [CategoriesController::class, 'index'])->name('categories');
        Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
        Route::post('categories', [CategoriesController::class, 'store'])->name('categories.store');
        Route::get('categories/{category}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
        Route::put('categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');
        Route::delete('categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

        Route::resource('partners', PartnerController::class);
    });

});