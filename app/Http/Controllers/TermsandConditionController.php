<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsandConditionController extends Controller
{
    public function index(){
        return view('terms_and_condition');
    }
}
