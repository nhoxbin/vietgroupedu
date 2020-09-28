<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
    	return view('contact');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'phone'  =>  'required|number',
            'message' =>  'required'
        ]);
        $data = array(
            'email'      => $request->email,
            'name'      => $request->name,
            'message'   => $request->message
        );
        try {
            Mail::to(config('mail.mailers.smtp.username'))->send(new SendMail($data));
        } catch(\Exeption $e) {
            return response('Fail to send Mail!', 500);
        }
        if ($request->ajax()) {
        	return response('Thank you for contact us!', 200);
        }
        return back()->with('success', 'Thank you for contact us!');
    }
}
