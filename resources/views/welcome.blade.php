@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group">
                     <label for="email">Your E-Mail</label>
                     <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                     <label for="name">Your Name</label>
                     <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                     <label for="password">Your passoword</label>
                     <input type="password" class="form-control" name="passowrd" id="passowrd">
                </div>
                <button typr="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="#" method="post">
                <div class="form-group">
                     <label for="email">Your E-Mail</label>
                     <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                     <label for="password">Your passoword</label>
                     <input type="password" class="form-control" name="passowrd" id="passowrd">
                </div>
                <button typr="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection