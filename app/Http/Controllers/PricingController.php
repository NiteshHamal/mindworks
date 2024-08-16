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

    public function sendMessage(PricingCustomCreateRequest $request){
        $data = $request->validated();

        Mail::send('mail.custom_pricing', $data, function ($message) use ($data) {
            $message->to('info@mindworksme.com');
            $message->subject('Custom Pricing');
            $message->replyTo($data['email']);
        });



        // sweetalert()->addSuccess('');
        return back()->with('success','Email has been send successfully!');
    }

}
