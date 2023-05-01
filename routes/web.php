<?php

use App\Http\Controllers\ksefIntegrationController;
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

Route::get('/', [ksefIntegrationController::class, 'showPageUsers'])->name('home');
Route::get('/user/{id}', [ksefIntegrationController::class, 'userPage']);
Route::get('/user-init-token', [ksefIntegrationController::class, 'InitToken']);
Route::post('/sync-invoices', [ksefIntegrationController::class, 'InvoiceSyncFilter']);
