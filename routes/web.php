<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PricingController;

Route::get('/', [HomeController::class, 'index']);

Route::get('about', [AboutController::class, 'index']);

Route::get('service', [ServiceController::class, 'index']);

Route::get('projects', [ProjectsController::class, 'index']);

Route::get('team', [TeamController::class, 'index']);

Route::get('pricing', [PricingController::class, 'index']);



