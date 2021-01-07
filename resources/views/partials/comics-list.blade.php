<div class="container">
    <div class="comicsList">
        @foreach ($comics as $el)
            <a href="{{ route('product-detail', $el['id'])}}" class="comicCard">
                <img class="imgResp mb-1" src="{{$el['image']}}" alt="{{$el['title']}}">
                <small>{{$el['title']}}</small>
            </a>
        @endforeach
    </div>
    <div class="txtCenter mt-2">
        <button class="btn btnPrimary"> LOAD MORE </button>
    </div>
</div>