<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AceController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        return view('news');
    }

    public function service()
    {
        return view('service');
    }

    public function recruit()
    {
        return view('recruit');
    }

    public function contact()
    {
        return view('contact');
    }

    public function mail_send(Request $request)
    {
    	$data = ['name' => $request->name,
                'mail' => $request->mail,
                'tel' => $request->tel,
                'content' => $request->content,];

        $mail = $request->mail;

        Mail::send('mail', $data, function($message) use ($mail){
            $message->to($mail, 'Test')->subject('【Ace&Co.】お問い合わせ完了のご案内');
        });

        Mail::send('mail_admin', $data, function($message) {
            $message->to('info@ace-co.press', 'Test')->subject('【Ace&Co.】お問い合わせ受け付けのお知らせ');
        });

        return redirect()->to('mail_comp');
    }

    public function mail_comp()
    {
        return view('mail_comp');
    }


}
