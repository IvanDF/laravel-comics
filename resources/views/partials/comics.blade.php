<div class="hero">
    <img class="heroBg" src="{{ asset('img/hero/bg-hero-home.jpg')}}" alt="Background hero home">
    <div class="comicPreview containerSmall">
        <img class="coverImg" src="{{ asset('img/hero/cover-home.jpg')}}" alt="Cover Home">
    </div>
</div>

<section class="comics pt-1 pb-1">
    @include('partials.comics-list')
</section>
<!-- Info bar -->
<div class="infoBar mb-5">
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