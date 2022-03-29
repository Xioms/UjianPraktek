<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

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
    return view('landing');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/profile', function(){
        return view('profile');
    });
    Route::get('/edit-profile', function(){
        return view('edit_profile');
    });
    Route::get('/edit', function(){
        return view('edit_movie');
    });
    Route::get('/discover', function(){
        return view('discover');
    });
    Route::get('/home', [FilmeController::class, 'index'])->name('home');
    Route::get('/add', [FilmeController::class, 'add'])->name('add');
    Route::get('/detail/{id}', [FilmeController::class, 'show'])->name('detail');
    // Route::get('/profile', [FilmeController::class, 'showProfile'])->name('profile');
    Route::post('/insert', [FilmeController::class, 'insert'])->name('insert');
    Route::get('/tampilanData/{id}', [FilmeController::class, 'tampilanData'])->name('tampilanData');
    Route::post('/Update/{id}', [FilmeController::class, 'Update'])->name('Update');
    Route::get('/delete/{id}', [FilmeController::class, 'delete'])->name('delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
