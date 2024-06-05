<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
// });

//USUARIO
Route::prefix('auth')->group(function(){
    Route::post('register',[AuthController::class,'register']);
});

Route::prefix('auth')->group(function(){
    Route::post('login',[AuthController::class,'login']);
});

Route::get('index',[CrudController::class,'index']);

Route::get('users/{id}', [CrudController::class, 'show']);

Route::delete('users/{id}', [CrudController::class, 'destroy']);

Route::put('users/{userId}', [CrudController::class, 'update']);

//PRODUCTOS
Route::get('/productos', [ProductController::class, 'index']);

Route::get('/productos/{id}', [ProductController::class, 'show']);