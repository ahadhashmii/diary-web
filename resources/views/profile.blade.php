@extends('layouts.main')

@push('title')
    <title>Profile</title>
@endpush

@section('content')

<div class="profile">
    <form enctype="multipart/form-data" class="profile-form" action="/profile/update" method="POST">
        @csrf
        @if (session('user')['image'])
        <img id="uploadPreview" src="{{Storage::url(session('user')['image'])}}" alt="">
        @else
        <img id="uploadPreview" src="assets/images/user.png" alt="">
        @endif
        <input id="uploadImage" onchange="PreviewImage();" style="align-self: center" type="file" name="image">
        <input type="name" name="name" id="" placeholder="Name" value="{{session('user')['name']}}" required>
        <input type="email" name="email" id="" placeholder="Email" value="{{session('user')['email']}}" required>
        <button class="btn-fill" type="submit">Update</button>
    </form>
    <button onclick="location.href='/logout'" class="btn-outlined">Logout</button>
</div>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

@endsection