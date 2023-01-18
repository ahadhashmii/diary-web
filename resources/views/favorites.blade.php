@extends('layouts.main')

@push('title')
    <title>Favorites</title>
@endpush

@section('content')
<div class="my-notes">
        <div class="notes-head">
            <h1>Favorites</h1>
            {{-- <button class="btn-outlined">View All</button> --}}
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

@endsection