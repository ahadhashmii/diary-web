@extends('layouts.main')

@push('title')
    <title>Update Note</title>
@endpush

@section('content')

<form class="create-form" action="/update/{{$note->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input value="{{$note->title}}" class="title" name="title" type="text" placeholder="Title" required>
    <textarea name="description" cols="30" rows="20" placeholder="Description" required>{{$note->description}}</textarea>
    <select value="{{$note->category}}" class="category-picker" name="category" required>
        @foreach ($categories as $item)
        @if ($item == $note->category)
        <option selected class="category-item" value="{{$item}}">{{$item}}</option>
        @endif
        <option class="category-item" value="{{$item}}">{{$item}}</option>
        @endforeach
    </select>
    <input value="{{$note->image}}" class="file" type="file" name="image" id="" required>
    <button class="btn-fill" type="submit">Update Note</button>
</form>

@endsection