@extends('layouts.main')

@push('title')
    <title>Signup</title>
@endpush

@section('content')

<div class="login">
    <h1>Signup</h1>
    <form class="login-form" action="/signup" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" id="" placeholder="Email" required>
        <input type="password" name="password" id="" placeholder="Password">
        <input type="password" name="password_confirmation" id="" placeholder="Confirm password" required>
        <button class="btn-fill" type="submit">Signup</button>
    </form>

    <p>Already have an account?</p>

    <button onclick="location.href='/login'" class="btn-outlined">Goto Login</button>
</div>

@endsection