<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

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
    return view('index');
});
Route::get('/admin', [AuthController::class, 'index'])->name('admin.index');
Route::get('/', [ContactController::class, 'show'])->name('contact.show');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AuthController::class, 'admin']);
    });
