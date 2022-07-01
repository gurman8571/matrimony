<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ThanksMail;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function EnquiryMail(request $req)
    {
        $data= [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'message' => $req->message,


            //'nationality' => $request->nationality ?? 'NA',
            //'user_ip' => $_SERVER['REMOTE_ADDR'],
            //'source' => $request->source,
        ];
        //dd($data);
         $enquiry=new Enquiry;
         $enquiry->name=$data['name'];
         $enquiry->phone=$data['phone'];
         $enquiry->email=$data['email'];
         $enquiry->message=$data['message'];
         $enquiry->save();

        Mail::to('gurma381@gmail.com')->send(new ContactMail($data));
        Mail::to($req->email)->send(new ThanksMail());
        $response = [

            'name' => $req->name,
            'response' => 'success'
        ];
           return view('emails.thank_you')->with('data',$response);

    }
}
