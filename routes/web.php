<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard routes by role
    Route::get('/admin/dashboard', function () {
        return view('dashboard', ['role' => 'superadmin']);
    })->name('admin.dashboard');

    Route::get('/psikiater/dashboard', function () {
        return view('dashboard', ['role' => 'psikiater']);
    })->name('psikiater.dashboard');

    Route::get('/client/dashboard', function () {
        return view('dashboard', ['role' => 'client']);
    })->name('client.dashboard');
});

require __DIR__.'/auth.php';
