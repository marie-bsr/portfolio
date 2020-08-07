<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        //Mail::to('administrateur@chezmoi.com')
           // ->send(new Contact($request->except('_token')));

        $contact = new Contact($request->except('_token'));

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->secteur = $request->secteur;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;
       $contact->sites = $request->sites;
        $contact->started = $request->started;

        $contact->save();

        Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'secteur' => $request->get('secteur'),
                 'sites' => $request->get('sites'),
                 'started' => $request->get('started'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('marie.basri@gmail.com');
               });


        return view('confirm');
    }


}
