<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\LC;

class MyaccountController extends Controller
{
    public function my_account(){
        $orders = LC::orderBy('id','desc')->where('user_id',Auth::user()->id)->get();
        return view('client.my-account',['orders'=>$orders]);
    }
}
