<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FreeTrail;

class FreeTrailController extends Controller
{
    public function store(Request $request){

       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'course_name' => 'required',
            'message' => 'required',
        ]);

        $trail = new FreeTrail();

        $trail->name = $request->name;
        $trail->email = $request->email;
        $trail->phone_number = $request->phone_number;
        $trail->course_name = $request->course_name;
        $trail->message = $request->message;
        $trail->save();
        

        return response()->json([
            'status' => true,
            'message' => 'Free trial booked successfully.'
        ]);
    }
}
