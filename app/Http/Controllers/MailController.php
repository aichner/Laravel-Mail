<?php

namespace App\Http\Controllers;

use App\Mail\MarkdownMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        //return $request;
        //Mail::to($request->to)->send(new SendMail($request));
        Mail::to($request->to)->send(new MarkdownMail($request));
        return redirect('/setMail');
    }
}
