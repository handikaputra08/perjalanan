<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SptController;
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
/*
Route::get('/', function () {
    return view('welcome', ['title' => 'Perjalanan']);
});
*/
Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('pegawai', [PegawaiController::class, 'index'])->name('pegawai');

// Route::get('/', function () {
//     return view('spt');
// })->name('spt');
Route::get('spt', [SptController::class, 'index'])->name('spt');
Route::get('tambahspt', [SptController::class, 'tambahspt'])->name('tambahspt');
Route::post('insertspt', [SptController::class, 'insertspt'])->name('spt.insertspt');

// Route::get('tambahspt/', function () {
//     return view('tambahspt');
// });

Route::get('tambahpegawai', [PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('insertdata', [PegawaiController::class, 'insertdata'])->name('insertdata');

Route::get('tampilkandata/{id}', [PegawaiController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('updatedata/{id}', [PegawaiController::class, 'updatedata'])->name('updatedata');
Route::get('delete/{id}', [PegawaiController::class, 'delete'])->name('delete');

