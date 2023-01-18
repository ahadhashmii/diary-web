@extends('layouts.main')

@push('title')
    <title>Signup</title>
@endpush

@section('content')

<div class="login">
    <h1>Signup</h1>
    <form class="login-form" action="/signup" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}" required>
        <input type="email" name="email" id="" placeholder="Email" value="{{old('email')}}" required>
        <input type="password" name="password" id="" placeholder="Password">
        <input type="password" name="password_confirmation" id="" placeholder="Confirm password" required>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <ul>
                    <li style="color: red; list-style-position: inside;">{{$error}}</li>
                </ul>
            @endforeach
        @endif
        <button class="btn-fill" type="submit">Signup</button>
    </form>

    <p style="margin-top: 10px;">Already have an account?</p>

    <button onclick="location.href='/login'" class="btn-outlined">Goto Login</button>
</div>

@endsection