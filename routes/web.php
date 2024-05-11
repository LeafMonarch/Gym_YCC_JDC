<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AdministratorController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'welcome']);

Route::resource('/appointment', AppointmentsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/appointment', [AppointmentsController::class, 'store'])->name('appointment.store');

Route::get('/newpage', [PagesController::class, 'newpage'])->name('newpage');


Route::get('/About_Us', function () {
    return view('About_Us');
});

Route::get('/Classes', function () {
    return view('Classes');
});


// Route::resource('/admin', AdministratorController::class);

use App\Http\Middleware\CheckAccessLevel;

Route::middleware(['auth', CheckAccessLevel::class])->group(function () {
    Route::resource('/admin', AdministratorController::class);
});


// Route::get('/appointmentBlog', function () {
//     return view('/appointmentBlog/index');
// })->middleware(['auth', 'verified'])->name('appointment');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
