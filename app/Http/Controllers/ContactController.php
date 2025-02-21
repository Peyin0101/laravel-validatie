<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function handle(ContactRequest $request)
    {
        $validatedData = $request->validated();
        Mail::to('admin@website.be')->send(new ContactFormMail($validatedData));

        return back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
