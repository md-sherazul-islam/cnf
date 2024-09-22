@extends('layouts.master')
@section('page') Edit Order @endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('update.order',$lc->lc_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="indianPosition" class="col-form-label">Indian Position</label>
                    <input 
                        id="indianPosition" 
                        name="indian_position" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Indian Positions"
                        value="{{$lc->lc_indian_position}}"
                    >
                </div>
                <div class="form-group">
                    <label for="petralParking" class="col-form-label">Petral Parking</label>
                    <input id="petralParking" 
                        name="petral_parking" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Petral Parking"
                        value="{{$lc->lc_petral_parking}}"    
                    >
                </div>
                <div class="form-group">
                    <label for="indianCustom" class="col-form-label">Indian Custom</label>
                    <input 
                        id="indianCustom" 
                        name="indian_custom" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Indian Positions"
                        value="{{$lc->lc_indian_custom}}"
                    >
                </div>
                <div class="form-group">
                    <label for="indianBorderContinental" class="col-form-label">Indian Border Continental</label>
                    <input 
                        id="indianBorderContinental" 
                        name="indian_border_continental" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Indian Positions"
                        value="{{$lc->lc_indian_border_containental}}"
                    >
                </div>
                <div class="form-group">
                    <label for="goodsUnloadSheildNo" class="col-form-label">Goods Unload Sheild No.</label>
                    <input 
                        id="goodsUnloadSheildNo" 
                        name="goods_unload" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Indian Positions"
                        value="{{$lc->lc_goods_unload_sheild_no}}"    
                    >
                </div>
                <div class="form-group">
                    <label for="manifest" class="col-form-label">Manifest</label>
                    <input 
                        id="manifest" 
                        name="manifest" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Manifest"
                        value="{{$lc->lc_manydint}}"
                    >
                </div>
                <div class="form-group">
                    <label for="billOkEntry" class="col-form-label">Billl Ok Entry</label>
                    <input 
                        id="billOkEntry" 
                        name="bill_ok_entry" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Bill Ok Entry"
                        value="{{$lc->lc_bill_ok_entry}}"    
                    >
                </div>
                <div class="form-group">
                    <label for="examine" class="col-form-label">Examine</label>
                    <input 
                        id="examine" 
                        name="examine" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Examine"
                        value="{{$lc->lc_examine}}"    
                    >
                </div>
                <div class="form-group">
                    <label for="assesment" class="col-form-label">Assesment</label>
                    <input 
                        id="assesment" 
                        name="assesment" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Assesment"
                        value="{{$lc->lc_assesment}}"    
                    >
                </div>
                <div class="form-group">
                    <label for="assesmentNotice" class="col-form-label">Assesment Notice</label>
                    <input 
                        id="assesmentNotice" 
                        name="assesment_notice" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Assesment Notice"
                        value="{{$lc->lc_assesment_notice}}"    
                    >
                </div>
                <div class="form-group">
                    <label for="afterDuty" class="col-form-label">After Duty</label>
                    <input 
                        id="afterDuty" 
                        name="after_duty" 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter After Duty"
                        value="{{$lc->lc_after_duty}}"    
                    >
                </div>
                <div class="form-group">
                    <label for="inputText4" class="col-form-label">LC Size</label>
                    <input id="inputText4" type="text" name="lc_size" class="form-control" placeholder="Enter LC Size">
                </div>
                
                <div class="form-group">
                    <label for="status" class="col-form-label">Status</label>
                    <select name="lc_status" id="status" class="form-control">
                        <option value="ongoing">On Going</option>
                        <option value="delivered">Delivered</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection