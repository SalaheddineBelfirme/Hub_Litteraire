<?php
use App\Http\Controllers\bookController;
use App\Http\Controllers\categorieController;
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

Route::resource('/categories',categorieController::class);

// Route::post('/categories',[categorieController::class,'store']);

// Route::post('/Onebook',[bookController::class,'show']);

Route::resource('/books',bookController::class);   

// Route::get('/books',[bookController::class,'index']);   
// Route::post('/books',[bookController::class,'store']);
















Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
