@extends('layouts.guest')
@section('content')
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="#"><h2>New Trade Agency</h2></a><span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="Enter email" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        
    </div>
</div>
@endsection