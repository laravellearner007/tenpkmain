<?php

namespace App\Http\Controllers;

use App\Jobs\ContactMailJob;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
        ]);
        $input = $request->all();
        $contact =new Contact();
        $contact->name =$request->name;
        $contact->email =$request->email;
        $contact->phone =$request->phone;
        $contact->description =$request->description;
        $contact->save();
        $details=[
            'id' => $contact->id,
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'description' =>$request->description
        ];
        ContactMailJob::dispatch($details);
        //->delay(now()->addMinutes(5));

        return back();
    }
}
