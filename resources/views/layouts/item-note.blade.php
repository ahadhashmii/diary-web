<hr>
<div onclick="location.href='/notes/{{$note->id}}'" class="item-note">
    <img src="{{Storage::url($note->image)}}" alt="">
    <div class="note-content">
        <div class="title-heart">
            <h2>{{$note->title}}</h2>
            <a href="/add-fav/{{$note->id}}">
                @if (is_null($note->favorite))
                <img src="{{URL::asset('assets/icons/heart-normal.svg')}}" alt="">
                @else
                <img src="{{URL::asset('assets/icons/heart-fill.svg')}}" alt="">            
                @endif
            </a>
        </div>
        <p>{{$note->description}}</p>
        <div class="spacer"></div>
        <div class="date-category">
            <h5>{{$note->category}}</h5>
            <h5>{{$note->created_at}}</h5>
        </div>
    </div>
</div>