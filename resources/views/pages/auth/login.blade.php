@extends('layouts.auth-master')
@section('title', 'Home')
@section('style')
@endsection

@section('container')
    <form class="mt-4" action="/login" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="text-dark" for="username">Username</label>
                    <input class="form-control" id="username" type="text" name="username" placeholder="enter your username">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="text-dark" for="password">Password</label>
                    <input class="form-control" id="password" type="password" name="password" placeholder="enter your password">
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-block btn-dark">Sign In</button>
            </div>
            {{-- <div class="col-lg-12 text-center mt-5">
                Don't have an account? <a href="#" class="text-danger">Sign Up</a>
            </div> --}}
        </div>
    </form>
@endsection

@section('script')

@endsection
