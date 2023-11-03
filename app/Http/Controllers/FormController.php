<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConfirmationEmail;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function form(){
        return view('form');
    }

    public function sendEmail(Request $request){//dependecy injection

        Mail::to($request->mail)->send(new ConfirmationEmail());
        return redirect()->route('home')->with('success','GATTIIIIIIIIII');
    }
}
