<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('index', [
        "title" => "Beranda"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami"
    ]);
});
// Route::get('/login', function () {
//     return view('login', [
//         "title" => "Login"
//     ]);
// });
Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});
Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Pusat Bantuan"
    ]);
});
Route::get('/pesan', function () {
    return view('order', [
        "title" => "Penyewaan",
        "content" => "form pemesanan kendaraan lepas kunci/dengan driver"
    ]);
});
Route::get('/pesan-konfirmasi', function () {
    return view('order2', [
        "title" => "Konfirmasi",
        "content" => "form pemesanan"
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

