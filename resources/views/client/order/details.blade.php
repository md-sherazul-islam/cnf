@extends('layouts.client')
@section('page') Order Details @endsection
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                    @if($lc)
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td>LC Indian Position</td>
                                    <td> 
                                        {{ $lc->lc_indian_position }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>LC Petral Parking</td>
                                    <td> {{$lc->lc_petral_parking}} </td>
                                </tr>
                                <tr>
                                    <td>LC Indian Custom</td>
                                    <td> {{$lc->lc_indian_custom}} </td>
                                </tr>
                                <tr>
                                    <td>Indian Border Continental</td>
                                    <td> {{$lc->lc_indian_border_continental}} </td>
                                </tr>
                                <tr>
                                    <td>Goods Unload Shield No.</td>
                                    <td> {{$lc->lc_goods_uload_sheild_no}} </td>
                                </tr>
                                <tr>
                                    <td>Manydint</td>
                                    <td> {{$lc->lc_manydint}} </td>
                                </tr>
                                <tr>
                                    <td>Bill OK Entry</td>
                                    <td> {{$lc->lc_bill_ok_entry}} </td>
                                </tr>
                                <tr>
                                    <td>Examine</td>
                                    <td> {{$lc->lc_examine}} </td>
                                </tr>
                                <tr>
                                    <td>Assesment</td>
                                    <td> {{$lc->lc_assesment}} </td>
                                </tr>
                                <tr>
                                    <td>Asesment Notice</td>
                                    <td> {{$lc->lc_assesment_notice}} </td>
                                </tr>
                                <tr>
                                    <td>After Duty</td>
                                    <td> {{$lc->lc_after_duty}} </td>
                                </tr>
                            </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                        @else 
                            {{ "Please add the data" }}
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>
@endsection