<div class="container">
    <div class="comicsType">
        CURRENT SERIES
    </div>
    <div class="comicsList">
        @foreach ($comics as $el)
            <a href="{{ route('product-detail', $el['urlName'])}}" class="comicCard">
                <img class="imgResp mb-1" src="{{$el['image']}}" alt="{{$el['title']}}">
                <small>{{$el['title']}}</small>
            </a>
        @endforeach
    </div>
    <div class="txtCenter mt-2 pb-2">
        <button class="btn btnPrimary"> LOAD MORE </button>
    </div>
</div>
<!-- Info bar -->
<div class="infoBar">
    <ul class="infoBarList hListCenter">
        <li class="infoBarItem">
            <a href="#">
                <img src="{{ asset('img/info-bar/digital-comics.png')}}" alt="">
                <h5 class="txtUpper">Digital comics</h5>
            </a>
        </li>
        <li class="infoBarItem">
            <a href="#">
                <img src="{{ asset('img/info-bar/merchandise.png')}}" alt="DC Merchandise">
                <h5 class="txtUpper">DC Merchandise</h5>
            </a>
        </li>
        <li class="infoBarItem">
            <a href="#">
                <img src="{{ asset('img/info-bar/subscriptions.png')}}" alt="Sbscription">
                <h5 class="txtUpper">Sbscription</h5>
            </a>
        </li>
        <li class="infoBarItem">
            <a href="#">
                <img src="{{ asset('img/info-bar/shop-locator.png')}}" alt="Comic shop leocator">
                <h5 class="txtUpper">Comic shop leocator</h5>
            </a>
        </li>
        <li class="infoBarItem">
            <a href="#">
                <img src="{{ asset('img/info-bar/power-visa.svg')}}" alt="DC power visa">
                <h5 class="txtUpper">DC power visa</h5>
            </a>
        </li>
    </ul>
</div>