<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FacturacionController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('/companies', CompanyController::class)->names('companies');
    Route::get('search',  [CompanyController::class, 'seach'])->name('companies.search');
});


Route::middleware('auth')->group(function () {

    Route::get('/facturacion', [FacturacionController::class, 'index'])->name('facturacion');

});
