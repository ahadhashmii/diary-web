@extends('layouts.main')

@push('title')
    <title>Login</title>
@endpush

@section('content')

<div class="login">
    <h1>Login</h1>
    <form class="login-form" action="/login" method="POST">
        @csrf
        <input type="email" name="email" id="" placeholder="Email" value="{{old('email')}}" required>
        <input type="password" name="password" id="" placeholder="Password" required>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <ul>
                    <li style="color: red; list-style-position: inside;">{{$error}}</li>
                </ul>
            @endforeach
        @endif
        <button class="btn-fill" type="submit">Login</button>
    </form>

    <p style="margin-top: 10px;">Don't have an account?</p>

    <button onclick="location.href='/signup'" class="btn-outlined">Create Account</button>
</div>

@endsection