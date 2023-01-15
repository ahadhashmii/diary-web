@extends('layouts.main')

@push('title')
    <title>Create Note</title>
@endpush

@section('content')

<form action="/create" method="POST">
    @csrf
    <input class="title" name="title" type="text" placeholder="Title" required>
    <textarea name="description" id="" cols="30" rows="20" placeholder="Description" required></textarea>
    <input class="file" type="file" name="image" id="" required>
    <button class="btn-fill" type="submit">Add Note</button>
</form>

@endsection