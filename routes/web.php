<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Simulator\SimulatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Email\EmailController;

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

/* Route::resource('blog', BlogController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']); */

Route::resource('blog', BlogController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('blog', BlogController::class)->only(['store']);
});

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simulator', [SimulatorController::class, 'index'])->name('simulator');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
