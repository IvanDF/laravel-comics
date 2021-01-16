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
    <div class="infoBar mY2">
        <div class="container">
        <ul class="infoBarList hListCenter">
            <li class="infoBarItem">
                <a href="#">
                    <img src="{{ asset('img/comics/info-bar/digital-comics.png')}}" alt="">
                    <h5 class="txtUpper">Digital comics</h5>
                </a>
            </li>
            <li class="infoBarItem">
                <a href="#">
                    <img src="{{ asset('img/comics/info-bar/merchandise.png')}}" alt="DC Merchandise">
                    <h5 class="txtUpper">DC Merchandise</h5>
                </a>
            </li>
            <li class="infoBarItem">
                <a href="#">
                    <img src="{{ asset('img/comics/info-bar/subscriptions.png')}}" alt="Sbscription">
                    <h5 class="txtUpper">Sbscription</h5>
                </a>
            </li>
            <li class="infoBarItem">
                <a href="#">
                    <img src="{{ asset('img/comics/info-bar/shop-locator.png')}}" alt="Comic shop leocator">
                    <h5 class="txtUpper">Comic shop leocator</h5>
                </a>
            </li>
            <li class="infoBarItem">
                <a href="#">
                    <img src="{{ asset('img/comics/info-bar/power-visa.svg')}}" alt="DC power visa">
                    <h5 class="txtUpper">DC power visa</h5>
                </a>
            </li>
        </ul>
    </div>
</div>