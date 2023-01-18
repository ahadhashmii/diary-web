<hr>
<div class="item-note">
    <img src="{{Storage::url($note->image)}}" alt="">
    <div class="note-content">
        <div class="title-heart">
            <h2>{{$note->title}}</h2>
            <img onclick="location.href='/add-fav/{{$note->id}}'" src="assets/icons/heart-normal.svg" alt="">
        </div>
        <p>{{$note->description}}</p>
        <div class="spacer"></div>
        <div class="date-category">
            <h5>NATURE</h5>
            <h5>{{$note->created_at}}</h5>
        </div>
    </div>
</div>