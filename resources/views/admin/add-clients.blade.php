@extends('layouts.master')
@section('page') Add Clients @endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('post.client') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Client Name</label>
                    <input id="inputText3" name="name" type="text" class="form-control" placeholder="Enter client name">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input id="inputEmail" type="email" name="email" placeholder="name@example.com" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputText4" class="col-form-label">Phone Number</label>
                    <input id="inputText4" type="number" name="phone" class="form-control" placeholder="Numbers">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input id="inputPassword" type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection