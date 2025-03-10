<?php

use App\Http\Controllers\Prectices\ColletionColtroller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {
    require __DIR__.'/api/v1/category.php';
    // You can include other files or define more routes here...
    // Collletions ...

    Route::post('users',[ColletionColtroller::class,'insertUser']);
    Route::get('users-get',[ColletionColtroller::class,'getUsers']);
    Route::post('users-edit',[ColletionColtroller::class,'editUser']);
    Route::delete('users-delete/{id}',[ColletionColtroller::class,'deleteUser']);
    // ...
});

