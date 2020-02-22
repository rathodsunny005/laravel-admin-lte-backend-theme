<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Reminder;
use App\user;
use Mail;

class ForgotPasswordsController extends Controller
{
    public function forgot()
    {
        return view('auth.passwords.forgotpassword');
    }

    public function password(Request $request)
    {
        //        dd($request->all());   
        $user = User::whereEmail($request->email)->first();

        if($user == null)
        {
            return redirect()->back()->with(['error'=>'Email not exitst']); 
        }
        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user) ? : Reminder::create($user);
        $this->sendEmail($user,$reminder->code);

        return redirect()->back()->with(['success'=>'Reset Code sent to your email']);
    }

    public function sendActivationEmail($user,$code){
    Mail::send(
        'email.forgot',
        ['user' => '$user','code' => $code],
        function($message) use ($user){
            $message->to($user->email);
            $message->subject("$user->name,reset your password");
        }
    );
}
    
}   
