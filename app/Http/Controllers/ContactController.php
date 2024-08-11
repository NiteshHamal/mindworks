<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Contactus\ContactUsCreateRequest;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function sendEmail(ContactUsCreateRequest $request){
        $data = $request->validated();


        // dd($request->message);
        // $selectedServices = $request->input('services', []);
        // dd($selectedServices);

        Mail::send('mail.contact_us', $data, function ($message) use ($data) {
            $message->to('nitesh0hamal@gmail.com');
            $message->subject('New Contact Us Message');
        });

        // sweetalert()->addSuccess('');
        return back()->with('success','Contact has been send successfully!');



    }
}
