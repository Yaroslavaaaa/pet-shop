<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/products', [\App\Http\Controllers\API\ProdController::class, 'index']);
Route::get("/products/{id}", [\App\Http\Controllers\API\ProdController::class, 'show']);
Route::post('/products/add', [\App\Http\Controllers\API\ProdController::class, 'store']);
Route::put("/products/{id}", [\App\Http\Controllers\API\ProdController::class, 'update']);
Route::delete("/products/{id}", [\App\Http\Controllers\API\ProdController::class, 'delete']);
