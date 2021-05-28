<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Register;
use App\Mail\thankyou;
use App\Models\attendee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Register extends Controller
{
    public function store(Request $request)
    {
        $data = attendee::findOrFail($request->name);


        Mail::mailer('postmark')
        ->to($request->email())
        ->send(new thankyou($data));
    }
}
