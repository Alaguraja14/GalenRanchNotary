<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SubscribeMail;
use Location;

class SubscribeController extends Controller
{
    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

         //$ip = '162.159.24.227';
         $ip = request()->ip();
        
        $currentUserInfo = Location::get($ip);
        // dd($currentUserInfo);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'loaction'=>$currentUserInfo->countryName
        );

        // dd($data);

        Log::info('data');
        Log::info($data);

        Mail::to('Govind@GaleRanchNotary.com')->send(new SubscribeMail($data));
        return back()->with('success','Thanks For Subscribe');
    }
}
