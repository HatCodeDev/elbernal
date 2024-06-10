<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::resource('games',App\Http\Controllers\GameController::class);
    // Otras rutas protegidas
    Route::resource('users',App\Http\Controllers\UserController::class);
    Route::resource('tostados',App\Http\Controllers\TostadoController::class);
    Route::resource('bebidas',App\Http\Controllers\BebidaController::class);
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Ruta para generar el PDF
Route::get('/generate-pdf', [App\Http\Controllers\PDFController::class, 'generatePDF']);
Route::get('/generateTostadoPDF', [App\Http\Controllers\PDFController::class, 'generateTostadoPDF']);
