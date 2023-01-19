@extends('layouts.main')

@push('title')
    <title>Create Note</title>
@endpush

@section('content')

<form class="create-form" action="/create" method="POST" enctype="multipart/form-data">
    @csrf
    <input class="title" name="title" type="text" placeholder="Title" required>
    <textarea name="description" id="" cols="30" rows="20" placeholder="Description" required></textarea>
    <select class="category-picker" name="category" required>
        <option disabled value="" selected hidden>Pick category...</option>
        @foreach ($categories as $item)
        <option class="category-item" value="{{$item}}">{{$item}}</option>
        @endforeach
    </select>
    <input class="file" type="file" name="image" id="" required>
    <button class="btn-fill" type="submit">Add Note</button>
</form>

@endsection