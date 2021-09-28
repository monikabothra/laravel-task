<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\contactNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(
            ['email'=>'required|email']
        );
        // dd(request('email'));
        $data = new contact;
        $data->email = request('email');
        $data->mobile = request('mobile');
        // dd($data);
        $data->save();
        $mail_data=[
            'email'=>request('email'),
            'mobile'=>request('mobile'),
        ];
        // dd($data->email);
        Mail::send('contact.contact', $mail_data, function ($message) use($data){
           
            $message->to($data->email);
            $message->subject('Email service Tested');
           
        });
        // dd(request()->user());
        // request()->user()->notify(new contactNotification($data));
        // Notification::send(Auth::user(), new contactNotification($data));
    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
