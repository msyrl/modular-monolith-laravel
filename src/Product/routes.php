<?php

use Illuminate\Support\Facades\Route;

Route::prefix('product-module')
    ->middleware('api')
    ->namespace('Laracon\Product\Application\Http\Controllers')
    ->group(function () {
        Route::apiResource('products/', ProductController::class);
    });
