@extends('layouts.master')
@section('page') Orders @endsection
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Order List</h5>
            <div class="card-body">
                <div class="table-responsive">
                @if($orders->count() > 0)
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>LC Number</th>
                                <th>Client</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->lc_number }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->lc_status }}</td>
                                    <td>
                                        <a href="{{ route('order.details',$order->id) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('edit.order',$order->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                @endforeach 
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    @else
                        <p>No orders found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>
@endsection