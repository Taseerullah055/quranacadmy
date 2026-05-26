<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ContactUs;
class ContactUsController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            
        ]);

        $trail = new ContactUs();

        $trail->name = $request->name;
        $trail->email = $request->email;
        $trail->subject = $request->subject;
        $trail->message = $request->message;
        
        $trail->save();
        

        return response()->json([
            'status' => true,
            'message' => 'Free trial booked successfully.'
        ]);
    }
}
