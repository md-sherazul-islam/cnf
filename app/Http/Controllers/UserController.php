<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function clients(){
        $clients = User::where('user_role','client')->get();
        return view('admin.clients',['clients'=>$clients]);
    }
    public function addClientsPage(){
        return view('admin.add-clients');
    }
    public function addClient(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'user_role' => 'client'
        ]);
        return back()->with('success', 'Client Added');
    }
}
