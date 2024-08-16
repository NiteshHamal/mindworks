<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PricingCustom\PricingCustomCreateRequest;


class PricingController extends Controller
{
    public function index(){
        return view('pricing');
    }

}
