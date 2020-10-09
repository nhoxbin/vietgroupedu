<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'phone'  =>  'required|regex:/^\d{10}$/i',
            'message' =>  'required'
        ]);
        $data = $request->input('name', 'email', 'phone', 'message');
        try {
            Mail::to(config('mail.mailers.smtp.username'))->send(new SendMail($data));
        } catch(\Exeption $e) {
            return response('Fail to send Mail!', 500);
        }
        if ($request->ajax()) {
        	return response(['message' => 'Thank you for contact us!'], 200);
        }
        return back()->with('success', 'Thank you for contact us!');
    }
}
