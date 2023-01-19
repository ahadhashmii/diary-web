@extends('layouts.main')

@push('title')
    <title>My Notes</title>
@endpush

@section('content')
<div class="my-notes" style="min-height: 70vh;">
    <div class="notes-head">
        <h1>My Notes</h1>
        <button onclick="location.href='/create'" class="btn-outlined">Create New Note</button>
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
@endsection