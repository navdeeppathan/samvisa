<?php

namespace App\Http\Controllers;

use App\Mail\VisaRequestAdminMail;
use App\Models\VisaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class VisaRequestController extends Controller
{

    // Store visa request
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => 'required',
            'nationality' => 'required',
            'destination' => 'required'
        ]);

        $visa = VisaRequest::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nationality' => $request->nationality,
            'destination' => $request->destination,
            'message' => $request->message,
            'skip_payment' => $request->has('skip_payment'),
            'edit_token' => Str::uuid()
        ]);

         // send mail to admin
        Mail::to(env('MAIL_USERNAME'))->send(new VisaRequestAdminMail($visa));
        return back()->with('success','Visa request submitted successfully.');
    }


    // open edit page from email
    public function edit($token)
    {
        $visa = VisaRequest::where('edit_token',$token)->firstOrFail();

        return view('visa.edit',compact('visa'));
    }


    // update visa request
    public function update(Request $request,$token)
    {
        $visa = VisaRequest::where('edit_token',$token)->firstOrFail();

        $visa->update($request->only([
            'name',
            'email',
            'phone',
            'nationality',
            'destination',
            'message'
        ]));

        return redirect()->back()->with('success','Request updated successfully.');
    }

}