<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    //
    public function index()
    {

        $data=[
            "title"=>"Testing mail using Queue",
            "body"=>"This is a body testing",
        ];
        Mail::to("devangrjoshi2003@gmail.com")->send(new TestMail($data));
        dd("sent email.....");
    }
}
