<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PricingForm\FormCreateRequest;


class FormController extends Controller
{
    public function index() {
        return view('plan_form');
    }

    // public function takePlanMail(FormCreateRequest $request){
    //     $data = $request->validated();
    //     dd($data);

    //     Mail::send('mail.service_plan', $data, function ($message) use ($data) {
    //         $message->to('nitesh0hamal@gmail.com');
    //         $message->subject('Services and Plan');
    //         $message->replyTo($data['email']);
    //     });

    //     return redirect('pricing')->with('success', 'Email has been sent successfully!');
    // }

    public function takeServicePlan(Request $request) {
        // Validate and retrieve the form data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'plan' => 'required|string|max:255',
        ]);

        try {

            Mail::send('mail.service_plan', $validatedData, function ($message) use ($validatedData) {
                $message->to('nitesh0hamal@gmail.com');
                $message->subject('Services and Plan');
                $message->replyTo($validatedData['email']);
            });


            return back()->with('success', 'Email has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }

}
