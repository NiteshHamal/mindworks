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
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsandConditionController;
use App\Http\Controllers\FormController;
use App\Http\Requests\ContactUs\ContactUsCreateRequest;





Route::get('/', [HomeController::class, 'index']);

Route::get('about', [AboutController::class, 'index']);

Route::get('services', [ServiceController::class, 'index']);

Route::get('projects', [ProjectsController::class, 'index']);

Route::get('team', [TeamController::class, 'index']);

Route::get('pricing', [PricingController::class, 'index']);

Route::get('faq', [FaqController::class, 'index']);

Route::get('contact', [ContactController::class, 'index']);

Route::get('privacy_policy', [PrivacyPolicyController::class, 'index']);

Route::get('terms_and_condition', [TermsandConditionController::class, 'index']);

Route::post('contactus', [ContactController::class, 'sendEmail']);


Route::get('form', [FormController::class, 'index']);

Route::post('plan-and-price', [FormController::class, 'takeServicePlan']);


// Route::post('users', function () {
//     Mail::raw("This is a test email for user", function ($message) {
//         $message->to('nitesh@mindworksme.com')  // Replace with your email address
//                 ->subject('Test Email');
//     });
//     return response()->json(['message' => 'Test email sent!'], 200);

// });


