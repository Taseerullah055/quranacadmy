<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request){

       return view('admin.login');
    }

    public function authentication(Request $request){

        $credentails = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentails)){

          return redirect()->route('admin.dashboard');
        }

        return back()->with('error','Something went wrong!.');
    }

    public function logout(Request $request){

      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect()->route('admin.login');
    }
}
