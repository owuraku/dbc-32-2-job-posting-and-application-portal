<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SendSMS
{

    public static function send($number, $message)
    {
        $url = env('ARKESEL_SMS_URL');

        return Http::withHeader('api-key', env('ARKESEL_SMS_API_KEY'))
            ->post($url, [
                'message' => $message,
                'sender' => 'APP NAME',
                'recipients' => [
                    $number
                ]
            ])->throw();
    }
}
