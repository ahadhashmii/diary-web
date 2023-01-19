@extends('layouts.main')

@push('title')
    <title>Note Details</title>
@endpush

@section('content')

<section class="details">
    <h1>{{$note->title}}</h1>
    <div class="date-fav">
        <h4 style="color: darkgray;">Posted at {{$note->created_at}}</h4>
        <div class="spacer"></div>
        <a href="/update/{{$note->id}}">
            <img src="{{URL::asset('assets/icons/edit.svg')}}" alt="">
        </a>
        <a href="/notes/delete/{{$note->id}}">
            <img src="{{URL::asset('assets/icons/delete.svg')}}" alt="">
        </a>
        <a href="/add-fav/{{$note->id}}">
            @if (is_null($note->favorite))
            <img src="{{URL::asset('assets/icons/heart-normal.svg')}}" alt="">
            @else
            <img src="{{URL::asset('assets/icons/heart-fill.svg')}}" alt="">            
            @endif
        </a>
    </div>
    <img src="{{Storage::url($note->image)}}" alt="">
    <p>{{$note->description}}</p>
</section>

@endsection