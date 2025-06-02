<?php

namespace app\Services\Email;

use App\Services\Email\InterfaceEmailServices;
use Illuminate\Http\Request;
use App\Models\TimeSchedule;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailClient;

class EmailServices implements InterfaceEmailServices
{
    public static function generateUrl($email)
    {
        return URL::temporarySignedRoute(
            'autoAuth',
            now()->addMinutes(30),
            ['email' => $email]
        );
    }


    public static function sendEmail($email, $typeEmail, $textEmail = "da")
    {
        Mail::to($email)->send(new MailClient([$typeEmail, $textEmail]));
    }
}
