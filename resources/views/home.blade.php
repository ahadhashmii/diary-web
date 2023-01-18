@extends('layouts.main')

@push('title')
    <title>My Diary - Home</title>
@endpush

@section('content')

<section class="home-main">
    <div class="back-img">
        <h1>My Diary</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque delectus vel beatae dolores
            molestias neque, velit excepturi aliquam molestiae aliquid praesentium nisi tempore, a ipsam libero
            possimus eius quam suscipit!</p>
        <a href="/create"><button class="btn-fill">LET'S WRITE A NOTE</button></a>
    </div>

    <div class="my-notes">
        <div class="notes-head">
            <h1>My Notes</h1>
            <button onclick="location.href='/notes'" class="btn-outlined">View All</button>
        </div>
        @if (count($notes) < 1)
            <hr>
            <h1 style="align-self: center; color: darkgray">Empty</h1>
        @else
            @foreach ($notes as $note)
            @include('layouts.item-note')
            @endforeach
        @endif
    </div>

    <div class="my-notes" style="margin-top: 50px;">
        <div class="notes-head">
            <h1>Favorites</h1>
            <button onclick="location.href='/favorites'" class="btn-outlined">View All</button>
        </div>
        @if (count($notes) < 1)
            <hr>
            <h1 style="align-self: center; color: darkgray">Empty</h1>
        @else
            @foreach ($notes as $note)
            @if (!is_null($note->favorite))
            @include('layouts.item-note')
            @endif
            @endforeach
        @endif
    </div>
</section>

@endsection
