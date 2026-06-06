<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function addReview(){

      return view('client.add_review');
    }

    public function storeReview(Request $request){

       $reivew = DB::table('reviews')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'review' => $request->message,
        'rating' => $request->rating
       ]);

        if($reivew){

            return response([
                'message' => "Review Add Successfully.",
                'status' => true
            ]);    
        }

        return response([

          'message' => 'Something Went Wrong. Try Later',
          'statue' => false
        ]);
    }
}
