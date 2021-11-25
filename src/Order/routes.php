<?php

use Illuminate\Support\Facades\Route;

Route::prefix('orders')
    ->middleware('api')
    ->namespace('Accredify\Order\Application\Http\Controllers')
    ->group(function () {
        Route::apiResource('/', OrderController::class)->except('destroy');
    });
