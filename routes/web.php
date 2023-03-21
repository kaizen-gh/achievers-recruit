<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplicantsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/candidates', function () {
    return view('candidates');
})->name('candidates');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');


Route::get('privacy',[ApplicantsController::class,'privacy'])->name('privacy');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');


Route::get('/leave-message', function () {
    return view('leave-message');
})->name('leave-message');


Route::post('/contact-us',[ProfileController::class,'sendMessage'])->name('send-message');
Route::get('/dashboard',[ApplicantsController::class,'dashboard'])->name('dashboard');

// Route::get('dashboard/candidates', function () {
//     return view('layouts.admin.candidates');
// })->name('dashboard.candidates');

Route::get('dashboard/candidates',[ApplicantsController::class,'candidates'])->name('dashboard.candidates');
Route::get('dashboard/clients',[ApplicantsController::class,'clients'])->name('dashboard.clients');


// Route::get('/dashboard/clients', function () {
//     return view('layouts.admin.clients');
// })->name('dashboard.clients');

Route::resource('/applicants',ApplicantsController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
