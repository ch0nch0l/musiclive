<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\newSendMail;

class mailController extends Controller
{
    public function send(){

        Mail::send(new newSendMail());
    }
}
