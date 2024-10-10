<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::resource('users',App\Http\Controllers\UserController::class);
    Route::resource('tostados',App\Http\Controllers\TostadoController::class);
    Route::resource('bebidas',App\Http\Controllers\BebidaController::class);
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Ruta para generar el PDF
Route::get('/generate-pdf', [App\Http\Controllers\PDFController::class, 'generatePDF']);
Route::get('/generateTostadoPDF', [App\Http\Controllers\PDFController::class, 'generateTostadoPDF']);
Route::get('/pdf/generateBebidaPDF', [App\Http\Controllers\PDFController::class, 'generateBebidaPDF']);