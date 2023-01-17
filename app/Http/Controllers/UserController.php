<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userLogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            $user=User::where('email', '=', $request->email)->first();
            return redirect('/');
        }
        return "kogin fafal";
    }

    public function register (Request $request){
        $this->validate($request,[
            'name' => 'required|unique:users,name|min:5',
            'email' => 'required|unique:users,name',
            'password' => 'required|min:6',
            'confirm-password' => 'required_with:password|same:password|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/login');
    }
}
