<?php

namespace App\Http\Controllers;

use App\InvestmentPackage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function forgotPassword(){

        return view('auth.forgot-password');
    }

    public function recoverPassword(Request $request){

        $email = $request->input('email');

        $recover = User::where('email', $email)->get()->first();

        if(!$recover){
            Session::flash('warning', 'This email does not exists');
            return redirect()->back();
        }

        $data = [
            'name' => $recover->name,
            'email' => $recover->email,
            'password_backup' => $recover->password_backup,
        ];

        // Send Email user
        Mail::send('emails.users.recover-password', $data, static function ($message) use ($data) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->to($data['email'], $data['name']);
            $message->replyTo(env('MAIL_FROM_ADDRESS'), 'Digital Metrics Investment');
            $message->subject('Your Password');
        });

        Session::flash('success', 'Your Password has been sent to your email');
        return redirect()->back();
    }

    public function investmentPackages()
    {
        $packages = InvestmentPackage::all();
        return view('investment-packages', compact('packages'));
    }

    public function home(){
        $packages = InvestmentPackage::all();
        return view('home', compact('packages'));
    }
}
