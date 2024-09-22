<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if(Auth::user()->user_role == 'admin'){
                return redirect()->intended('dashboard');
            }
            return redirect()->intended('my-account');
        } else {
            return redirect()->back();
        }
    }

    public function createAdmin(){
        User::create([
            'name' => 'admin',
            'email' => 'shirazulislam99@gmail.com',
            'phone' => '01986897020',
            'password' => Hash::make('password'),
            'user_role' => 'admin'
        ]);
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
