<div class="comics">
    <div class="containerSmall pY1 comicsList">
        @foreach ($comics as $comic) 
            <div class="ComicCard">
                <a href="{{ route('comic-detail', $comic['urlName']) }}">
                    <img class="imgResp" src="{{$comic['image-cover']}}" alt="{{$comic['title']}}">
                    <h4>{{$comic['title']}}</h4>
                </a>
            </div>
        @endforeach
    <div class="category">
        <h3>CURRENT SERIES</h3>
    </div>
    </div>
    <!-- Info bar -->
    <info-bar></info-bar>
</div>