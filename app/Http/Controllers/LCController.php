<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LC;
use App\Models\User;
use App\Models\LcDetail;
use Illuminate\Support\Facades\Auth;

class LCController extends Controller
{
    public function orders(){
        $orders = LC::orderBy('id','desc')->get();
        return view('admin.order.orders',['orders'=>$orders]);
    }
    public function addOrder(){
        $clients = User::where('user_role','client')->get();
        return view('admin.order.add-order',['clients'=>$clients]);
    }
    public function postOrder(Request $request){
        $order = LC::create([
            'lc_number' => $request->lc_number,
            'user_id' => $request->user_id,
            'lc_size' => $request->lc_size,
            'lc_status' => $request->lc_status
        ]);
        LcDetail::create([
            'lc_id' => $order->id
        ]);
        if($order){
            return redirect()->back()->with('success','Order Added');
        }
    }

    public function orderDetails($id){
        //$lc = LC::find($id);
        $lc =  LcDetail::where('lc_id',$id)->first();
        if(Auth::user()->role == 'admin'){
            return view('admin.order.details',['lc'=>$lc]);
        }
        return view('client.order.details',['lc'=>$lc]);
    }

    public function editOrder($id){
        $lc = LcDetail::where('lc_id', $id)->first();
        return view('admin.order.edit', ['lc'=>$lc]);
    }

    public function update($id,Request $request){
        $lc = LcDetail::where('lc_id',$id)->first();
        $lc->update([
            'lc_indian_position'    => $request->indian_position,
            'lc_petral_parking'     => $request->petral_parking,
            'lc_indian_custom'      => $request->indian_custom,
            'lc_indian_border_continental'  => $request->indian_border_continental,
            'lc_goods_uload_sheild_no'  => $request->lc_goods_unload_sheild_no,
            'lc_manydint'           => $request->manydint,
            'lc_bill_ok_entry'      => $request->bill_ok_entry,
            'lc_examine'            => $request->examine,
            'lc_assesment'          => $request->assesment,
            'lc_assesment_notice'   => $request->assesment_notice,
            'lc_after_duty'         => $request->after_duty
        ]);
        
        return redirect()->back();
    }
}
