<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){

       $data['users'] =  User::all();

       return view('admin.users.index',$data);
    }

    public function create(Request $request){

      return view('admin.users.create');
    }

    public function store(UserRequest $request){

        $data = [
            'name'     => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->user_role
        ];

        $user = User::create($data);
        
        if ($user) {

            return redirect()
                ->route('admin.users.index')
                ->with('success', 'User Added Successfully.');
        }
    }

    public function edit($id){

      $data['user'] = User::findorfail($id);
      return view('admin.users.edit',$data);
    }

    public function update(UserRequest $request){

      $user_id = $request->id;

      $user = User::where('id',$user_id)->update([

        'name' => $request->username,
        'email' => $request->email,
        'role' => $request->user_role
      ]);

      if($user){

        return redirect()->route('admin.users.index')->with('success','User Update Successfully.!');    
      }

      return back()->with('error','Something went wrong.!');
      
    }

    public function delete($id){

     $user = User::find($id)->delete();

     if($user){

       return redirect()->route('admin.users.index')->with('success','User Remove Successfully.!');
     }

     return back()->with('error','Something went wrong.!');

    }
}
