<?php

use App\Http\Controllers\ksefIntegrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'ksef'], function() {
    Route::get('/save-main-token', [ksefIntegrationController::class, 'saveMainToken']);
    Route::get('/test', [ksefIntegrationController::class, 'getDataFromInvoice']);
    Route::get('/test2', [ksefIntegrationController::class, 'sendInvoice']);
});