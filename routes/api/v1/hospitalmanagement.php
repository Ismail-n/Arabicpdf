<?php

use App\Http\Controllers\Api\Hospital\Management\Authcontroller;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'management'], function () {
        Route::post('/login', [Authcontroller::class, 'loginManagementUser']);
    }
);
