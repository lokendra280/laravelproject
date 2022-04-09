<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;
use Mail;
use Sentinel;
 use Reminder;

class Forgotpassword extends Controller
{
    public function forgot(){
        return view('forentend.Forgot');
    }
    public function password(Request $request){
        $login = login::whereEmail($request->email)->first();
        if($login == null){
            return redirect()->back()->with(['error' => 'Email not exists']);
        }
        $login = Sentinel::findById($login->id);
        $reminder = Reminder::exists($login) ? : Reminder::create($login);
        $this->sendEmail($login, $reminder->code);

        return redirect()->back()->with(['success' => 'Reset code sent to your email.']);
    }
    public function sendEmail($user, $code){
        Mail::send(
            'email.forgot',
            ['user' => $login, 'code' => $code],
            function ($message) use ($login){
                $message->to($login->email);
                $message->subject("$login->name", "reset yours password");
            }
        );
    }
}