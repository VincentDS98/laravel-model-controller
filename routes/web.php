<?php

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\MovieController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class,'index']);

Route::get('/chi-siamo', [PageController::class,'about']);

Route::get('/movies',[MovieController::class, 'index']); 