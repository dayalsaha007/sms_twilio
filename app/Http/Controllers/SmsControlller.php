<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class SmsControlller extends Controller
{
    function sms(){
        return view('sms');
    }

    function send_sms(Request $request){

        try {
            $account_sid = env('TWILIO_SID');
            $account_token = env('TWILIO_TOKEN');
            $number = env('TWILIO_FROM');

            $client = new Client($account_sid, $account_token);
             $client->messages->create(
                $request->number,[
                    'from'=>$number,
                    'body'=>$request->message,
                ]);

               return back();

        }
        catch (\Exception $e) {
            return $e->getMessage();
        }

    }


}
