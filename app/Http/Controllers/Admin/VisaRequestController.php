<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VisaRequestController extends Controller
{

    // list requests
    public function index()
    {
        $requests = VisaRequest::latest()->paginate(20);

        return view('admin.visarequests.index',compact('requests'));
    }


    // delete request
    public function destroy($id)
    {
        VisaRequest::findOrFail($id)->delete();

        return back()->with('success','Request deleted');
    }


    // send reply email
    public function sendReply(Request $request,$id)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $visa = VisaRequest::findOrFail($id);

        $url = route('visa.edit',$visa->edit_token);

        Mail::send('emails.visa_reply',[
            'messageBody'=>$request->message,
            'editUrl'=>$url
        ],function($mail) use ($visa){

            $mail->to($visa->email)
                ->subject('Visa Request Update');

        });

        return back()->with('success','Reply sent successfully');
    }

}