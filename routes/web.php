<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TraineeController;
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
    return redirect('https://mineganetworks.rw/');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/certificate/verify/{trainee}', [TraineeController::class, 'verify'])->name('trainee.verify');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('trainee')->group(function () {
        Route::get('', [TraineeController::class,'index'])->name('trainee.index');
        Route::get('create', [TraineeController::class,'create'])->name('trainee.create');
        Route::post('', [TraineeController::class, 'store'])->name('trainee.store');
    });
});

require __DIR__.'/auth.php';
