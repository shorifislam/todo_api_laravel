<?php


use App\Http\Controllers\TodoController;
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

Route::get('/todos', [TodoController::class,'index']);
Route::post('/todo', [TodoController::class,'store']);
Route::get('/todo/{id}', [TodoController::class,'show']);
Route::patch('/todo/{id}', [TodoController::class,'update']);
Route::delete('/todo/{id}', [TodoController::class,'destroy']);
//Route::resource('todo', TodoController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
