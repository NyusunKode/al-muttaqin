@extends('layouts.auth-master')
@section('title', 'Home')
@section('style')
@endsection

@section('container')
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="username" required>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
@endsection

@section('script')

@endsection
