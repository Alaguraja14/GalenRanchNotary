<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\ApostilleMail;

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

    public function sendemailApostille(Request $request)
    {
        $request->validate([
            'fname' => 'required|regex:/^[\pL\s]+$/u',
            'lname' => 'regex:/^[\pL\s]+$/u',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'address' => 'required',
            'zipcode' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'doc_inteded' => 'required',
            'language' => 'required|in:yes,no',
            'language_name' => 'regex:/^[\pL\s]+$/u',
            'doc_count' => 'required',
            'doc_type' => 'required',
            'file' => 'required|file|max:5120|mimes:jpeg,jpg,pdf,doc,docx',
        ], [
            'fname.required' => 'First Name is required',
            'fname.regex' => 'Please enter a valid name',
            'lname.regex' => 'Please enter a valid name',
            'email.email' => 'Please enter a valid email id',
            'phone_number.regex' => 'Please enter a valid phone number',
            'zipcode.regex' => 'Please enter a valid zipcode',
            'doc_inteded' => 'Documents intended is required',
            'language_name.regex' => 'Please enter a valid language',
            'file.required' => 'Please choose a file to upload.',
            'file.file' => 'The uploaded file must be a valid file.',
            'file.max' => 'The maximum file size allowed is 5MB.',
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

        if ($request->file('file')->isValid()) {
            $attachment = $request->file('file');
            $attachmentPath = $attachment->getRealPath();
            $attachmentName = $attachment->getClientOriginalName();

            $data = array(
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'zipcode' =>  $request->zipcode,
                'doc_inteded' =>  $request->doc_inteded,
                'language' =>  $request->language,
                'language_name' => $request->language_name,
                'doc_count' =>  $request->doc_count,
                'doc_type' =>  $request->doc_type,
            );
            Log::info('data');
            Log::info($data);
            // Send email with attachment
            Mail::to('Govind@GaleRanchNotary.com')
                ->send(new ApostilleMail($data, $attachmentPath, $attachmentName));

            return back()->with('success', 'Thanks For Contacting Us');
        } else {
            return back()->with('error', 'Invalid file uploaded.');
        }



        // Mail::to('alaguraja.mscmba@gmail.com')->send(new ApostilleMail($data));
        // return back()->with('success', 'Thanks For Contacting Us');
    }
}
