<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from tesztbibanka@gmail.com',
            'body' => 'ez egy újabb körüzenet, amit olvasás nélkül szoktak törölni az emberek'
        ];

        /*  Mail::to('foloslegesideirni@gmail.com')
            ->send(new DemoMail($mailData));*/
        foreach ([
            'patrikhamar460@gmail.com', 'beasuhi333@gmail.com', 'kissadam990202@gmail.com', 'estemil9779@gmail.com',
            'tesztmarci96@gmail.com', 'tesztbibanka@gmail.com', 'foloslegesideirni@gmail.com', 'tesztmariann7474@gmail.com',
            'eakos2131@gmail.com', 'tesztgyongyiteszt@gmail.com', 't3szt3l3m@gmail.com', 'testszzoli2023@gmail.com'
        ] as $recipient)

            Mail::to($recipient)
                ->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }
}
