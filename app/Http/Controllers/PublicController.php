<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }

    public function contacts(){
        return view('contacts');
    }

    public function submit(Request $request){
        $name = $request->name;
        $email = $request->email;
        $user_message = $request->user_message;

        try{
            Mail::to($email)->send(new ContactMail());
        } catch(Ecxeption $error){

            return redirect()->back()->with('emailError', 'Richiesta fallita. Ci scusiamo per il disagio. Riprova più tardi.');
        } return redirect(route('homepage'))->with('emailSent', 'Abbiamo ricevuto la tua mail. Ti contatteremo il prima possibile');
    
    }
}


