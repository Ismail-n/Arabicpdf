<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(
    ['prefix' => 'category'],
    function () {
        Route::get('/all', function(){echo "Hello";});
        Route::post('/add',[TestController::class, 'fileStore']);
    }
);
