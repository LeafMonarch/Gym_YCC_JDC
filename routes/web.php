<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AppointmentsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'welcome']);

Route::resource('/appointment', AppointmentsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/appointment', [AppointmentsController::class, 'store'])->name('appointment.store');

// Route::get('/appointmentBlog', function () {
//     return view('/appointmentBlog/index');
// })->middleware(['auth', 'verified'])->name('appointment');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
