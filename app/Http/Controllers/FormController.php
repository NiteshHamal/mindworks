<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PricingForm\PricingFormCreateRequest;


class FormController extends Controller
{
    public function index() {
        return view('plan_form');
    }

    public function takeServicePlan(PricingFormCreateRequest $request) {
        $validatedData = $request->validated();

        Mail::send('mail.service_plan', $validatedData, function ($message) use ($validatedData){
            $message->to('info@mindworksme.com');
            $message->subject('Services and Plan');
            $message->replyTo($validatedData['email']);
        });

        return back()->with('success','Email has been send successfully!');
    }

}
