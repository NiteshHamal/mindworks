<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUs\ContactUsCreateRequest;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function sendEmail(ContactUsCreateRequest $request){
        $data = $request->validated();

        Mail::send('mail.custom_pricing', $data, function ($message) use ($data) {
            $message->to('nitesh@mindworksme.com');
            $message->subject('Contact Form Message');
            $message->replyTo($data['email']);
        });

        // sweetalert()->addSuccess('');
        return back()->with('success','Email has been send successfully!');
    }
}
