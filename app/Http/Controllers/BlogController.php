<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Mail\SendBlogMail;

class BlogController extends Controller
{
    public function sendCompleteGuideForm(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ], [
            'name.required' => 'Please enter a valid name',
            'email.required' => 'Please enter a valid email id',
            'message.required' => 'Please enter a Comment',
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
            'message' => $request->message,
        );

        Log::info('data');
        Log::info($data);

        Mail::to('hodolabs@gmail.com')->send(new SendBlogMail($data));
        return back()->with('success','Message send Successfully');
    }
}
