<?php

namespace App\Http\Controllers;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

class SmsContoller extends Controller
{
    use Notifiable;

    public function index()
    {
        return view('send-sms');
    }

    public function sendSms(Request $request)
    {
        $basic  = new \Vonage\Client\Credentials\Basic(env('VONAGE_KEY'), env('VONAGE_SECRET'));
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($request->phone, 'HOHO', $request->message)
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
