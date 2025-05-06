<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;
Route::get('/', [RoutingController::class, 'preview'])->name('preview');
Route::get('/index', [RoutingController::class, 'root'])->name('root');
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'firstLevel'])->name('any');
