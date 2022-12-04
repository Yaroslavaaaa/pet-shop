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
Route::post('/products/add', [\App\Http\Controllers\API\ProdController::class, 'create']);
Route::put("/products/{id}", [\App\Http\Controllers\API\ProdController::class, 'update']);
Route::delete("/products/{id}", [\App\Http\Controllers\API\ProdController::class, 'delete']);


Route::post('register', [\App\Http\Controllers\API\AuthApiController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\API\AuthApiController::class, 'login']);
Route::get('emps', [\App\Http\Controllers\API\EmployeeController::class, 'index'])->middleware('auth:api');
Route::post('createemp', [\App\Http\Controllers\API\EmployeeController::class, 'store'])->middleware(['auth:api', 'admin']);
