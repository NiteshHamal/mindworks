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

    public function sendMessage(PricingCustomCreateRequest $request) {

        $data = $request->validated();

        dd($data);


        Mail::send('mail.custom_pricing', $data, function ($message) use ($data) {
            $message->to('nitesh.mindworksme@gmail.com');
            $message->subject('New Contact Us Message');
        });

        // sweetalert()->addSuccess('');
        return back()->with('success','Contact has been send successfully!');
    }
}
