@extends('layouts.master')
@section('page') Add Order @endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('post.order') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">LC Number</label>
                    <input id="inputText3" name="lc_number" type="text" class="form-control" placeholder="Enter LC Number">
                </div>
                <div class="form-group">
                    <label for="inputText4" class="col-form-label">LC Size</label>
                    <input id="inputText4" type="text" name="lc_size" class="form-control" placeholder="Enter LC Size">
                </div>
                <div class="form-group">
                    <label for="status" class="col-form-label">Client</label>
                    <select name="user_id" id="status" class="form-control">
                        @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="status" class="col-form-label">Status</label>
                    <select name="lc_status" id="status" class="form-control">
                        <option value="ongoing">On Going</option>
                        <option value="delivered">Delivered</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection