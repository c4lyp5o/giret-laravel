<?php

use App\Http\Controllers\KPASController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\TadikaController;
use App\Http\Controllers\YoungadultController;
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

// Welcome page

Route::get('/', function () {
    return view('welcome');
});

Route::get('/try', function () {
    return view('try');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/add', function () {
    return view('form');
})->middleware(['auth'])->name('form');

Route::post('add', [KPASController::class,'addData'])->middleware(['auth'])->name('add');
Route::get('list',[KPASController::class,'getData'])->middleware(['auth'])->name('list');

Route::get('search', function () {
    return view('searchbox');
});

// Route::resource('tadika', TadikaController::class);
// Route::resource('sekolah', SekolahController::class);
// Route::resource('youngadult', YoungadultController::class);

Route::controller(SekolahController::class)->group(function () {
    Route::get('/sekolah/form', 'create');
    Route::post('/sekolah/form', 'store');
    Route::get('/sekolah/list', 'index');
    Route::get('/sekolah/main', 'homePage');
    Route::get('/sekolah/search', 'search');
    Route::post('/sekolah/result', 'show');
});

require __DIR__.'/auth.php';
