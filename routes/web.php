<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doviz;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AboneController;
use App\Http\Controllers\MesajController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
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
    return redirect('/anasayfa');
});


Auth::routes();
Route::get("/anasayfa",[Doviz::class, 'getData']);
Route::post('/aboneol', [AboneController::class,'aboneOl']);
Route::post('/mesajat', [MesajController::class,'mesajAt']);
Route::get('/send', [MailController::class, 'index']);

Route::get('admin', [CustomAuthController::class, 'admin']);
Route::post('giris', [CustomAuthController::class, 'giris']);
Route::get('cikis', [CustomAuthController::class, 'cikis']);

Route::get('/aboneSil/{id}', [AdminController::class, 'aboneSil']);



Route::get('/aboneGoster/{id}', [AdminController::class, 'aboneGoster']);
Route::post('/aboneGuncelle', [AdminController::class, 'aboneGuncelle']);







