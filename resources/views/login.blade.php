@extends('layouts.main')

@push('title')
    <title>Login</title>
@endpush

@section('content')

<div class="login">
    <h1>Login</h1>
    <form class="login-form" action="/login" method="POST">
        @csrf
        <input type="email" name="email" id="" placeholder="Email">
        <input type="password" name="password" id="" placeholder="Password">
        <button class="btn-fill" type="submit">Login</button>
    </form>

    <p>Don't have an account?</p>

    <button onclick="location.href='/signup'" class="btn-outlined">Create Account</button>
</div>

@endsection