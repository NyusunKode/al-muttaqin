@extends('layouts.dashboard-master')

@section('title', 'Registrasi')

@section('style')
@endsection

@section('container')
    <h1>Generate QR Code</h1>

    <form action="/generate-qr" method="POST">
        @csrf
        <label for="sessionId">Session ID:</label>
        <input type="text" id="sessionId" name="sessionId" required>
        <button type="submit">Generate QR Code</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('qrData'))
        <div>
            <h2>QR Code:</h2>
            <img src="{{ session('qrData') }}" alt="QR Code">
        </div>
    @endif
@endsection

@section('script')
@endsection
