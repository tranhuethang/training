<?php

namespace App\Http\Controllers\Staff;

use Mail;

class SendMailController extends Controller
{

    public function getMail()
    {
        return view('staff.mail.index');
    }

    public function postMail()
    {
        $data = [];
        Mail::send('staff.mail.mail', $data, function ($message) {
            $message->from('dinhphong2604@gmail.com');
            $message->to('huethangbk@gmail.com');
            $message->subject('This is example send mail');
        });

        return redirect('index');
    }
}
