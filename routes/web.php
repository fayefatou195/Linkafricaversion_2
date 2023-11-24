<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortUrlController;
use App\Http\Controllers\ShortUserController;

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
});





Route::get('/welcome3', function () {
   //return view('dashboard');
})
->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/welcome3', [ShortUserController::class, 'index'])->name('welcome3')->middleware('auth');

Route::post('/', [ShortUrlController::class, 'showwelcome'])->name('welcome');
Route::get('/{code}', [ShortUrlController::class, 'show'])->name('user.links');



Route::get('/user/links', [ShortUrlController::class, 'index'])->name('user.links');

