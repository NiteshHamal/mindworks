<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TermsController;



Route::get('/', [HomeController::class, 'index']);

Route::get('about', [AboutController::class, 'index']);

Route::get('service', [ServiceController::class, 'index']);

Route::get('projects', [ProjectsController::class, 'index']);

Route::get('team', [TeamController::class, 'index']);

Route::get('pricing', [PricingController::class, 'index']);

Route::get('faq', [FaqController::class, 'index']);

Route::get('contact', [ContactController::class, 'index']);

Route::get('terms-and-controller', [TermsController::class, 'index']);




