<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            //'message' => 'required',
        ], [
            'name.regex' => 'Please enter a valid name',
            'email.email' => 'Please enter a valid email id',
            'phone_number.regex' => 'Please enter a valid phone number',
        ]);

        $messages = [
            'g-recaptcha-response.required' => 'You must check the reCAPTCHA.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        ];

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ], $messages);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        );

        Log::info('data');
        Log::info($data);

        Mail::to('Govind@GaleRanchNotary.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks For Contacting Us');
    }
}
