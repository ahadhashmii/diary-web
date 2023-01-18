@extends('layouts.main')

@push('title')
    <title>Note Details</title>
@endpush

@section('content')

<section class="details">
    <img src="{{Storage::url($note->image)}}" alt="">
    <h1>{{$note->title}}</h1>
    <p>{{$note->description}}</p>
</section>

@endsection