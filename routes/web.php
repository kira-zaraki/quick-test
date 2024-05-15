<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;


Route::controller(CalculatorController::class)->group(function () {
    Route::get('', 'index');
    Route::post('/calculate', 'calculate');
    Route::get('js-calculate', 'jsIndex');
});