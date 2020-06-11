<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// handling requests
use App\Mail\ContactFormPublic;
use Illuminate\Http\Request;
// instancing mailable
use Mail;
use App\Mail\ContactForm;

class ContentPublicController extends Controller
{

    public function landing()
    {
        return view('landing');
    }

    public function about()
    {
        return view('about');
    }


    // public function profile($id)
    // {
    //     //$user = User::findOrfail($id);
    //     $user = User::with(['questions', 'answers', 'answers.question'])->find($id);
    //     return view('profile')->with('user', $user);
    // }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        // declaring the validations
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);
        //initiate the Mailable and make request available in our mail->contactform
        Mail::to('philip.foitzik@gmail.com')->send(new ContactFormPublic($request));

        return redirect('/');
    }


}
