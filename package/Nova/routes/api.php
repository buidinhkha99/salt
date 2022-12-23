<?php

use Illuminate\Support\Facades\Route;
use Salt\Nova\Http\Controllers\NovaController;
use Salt\Nova\Http\Controllers\ScriptController;
use Salt\Nova\Http\Controllers\StyleController;

Route::middleware(['web', 'salt.inertia'])->group(function () {
    Route::get('/a', [NovaController::class, 'index']);
});

Route::group([
    'prefix' => 'salt-api',
], function () {
    // Scripts & Styles...
    Route::get('/scripts/{script}', [ScriptController::class, 'index']);
    Route::get('/styles/{style}', [StyleController::class, 'index']);
});
