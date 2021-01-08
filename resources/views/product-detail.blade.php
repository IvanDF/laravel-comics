@extends('layouts.main-content')

@section('page-title')
        <title>{{$comic['title']}}</title>
@endsection

@section('content')
    <div class="hero">
        <img class="heroBg" src="{{ $comic['image-hero'] }}" alt="Background hero home">
        <div class="comicPreview containerSmall">
            <img class="coverImg" src="{{ $comic['image-cover'] }}" alt="Cover Home">
        </div>
    </div>

    <section class="mainSection containerSmall mt-2">
        <article class="comic pt-1 pb-1">
            <h2 class="comicTitle txtUpper">{{$comic['title']}}</h2>
            <div class="priceContainer mt-2 mb-2">
                <div class="price">
                    U.S. Price: ${{ $comic['price'] }}
                    <span class="txtUpper">
                        Available on 11/10
                    </span>
                </div>
                <span class="availability">
                    Check Availability <i class="fas fa-angle-down"></i>
                </span>
            </div>
            <div class="descr">
                {!! $comic['body'] !!}
            </div>
        </article>
        <aside class="adv txtRight mt-1">
            <h3>ADVERISEMENT</h3>
            <img class="imgResp" src="{{ asset('img/advs/adv.png')}}" alt="Advertising">
        </aside>
    </section>

    <div class="moreInfo pb-2 mt-2">
        <div class="container moreInfoContent">
            <div class="talent">
                <ul class="talentList vList">
                    <h3 class="mb-2">Talent</h3>
                    <li class="talentItem">
                        Art by: 
                        <span class="blue">Sandy Jarrell <span class="dot">,</span> Agnes Garbowska</span>
                    </li>
                    <li class="talentItem">
                        Written by: 
                        <span class="blue">P.C. Morrissey <span class="dot">,</span> Heather Nuhfer</span>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <ul class="specsList vList">
                    <h3 class="mb-2">Specs</h3>
                    <li class="talentItem">
                        Series: 
                        <span class="blue"> {{ $comic['title'] }} </span>
                    </li>
                    <li class="talentItem">
                        U.S. Price: 
                        <span>{{ $comic['price'] }}</span>
                    </li>
                    <li class="talentItem">
                        On Sale Date: 
                        <span>Nov 10 2020</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="infoBar comicDetail">
        <ul class="infoBarList hListCenter">
            <li class="infoBarItem">
                <a href="#">
                    <h5 class="txtUpper">Digital comics</h5>
                    <img src="{{ asset('img/info-bar-comic/digital.png')}}" alt="">
                </a>
            </li>
            <li class="infoBarItem">
                <a href="#">
                    <h5 class="txtUpper">SHOP DC</h5>
                    <img src="{{ asset('img/info-bar-comic/shop.png')}}" alt="DC Merchandise">
                </a>
            </li>
            <li class="infoBarItem">
                <a href="#">
                    <h5 class="txtUpper">Comic shop leocator</h5>
                    <img src="{{ asset('img/info-bar-comic/locator.png')}}" alt="Comic shop leocator">
                </a>
            </li>
            <li class="infoBarItem">
                <a href="#">
                    <h5 class="txtUpper">subscriptions</h5>
                    <img src="{{ asset('img/info-bar-comic/subscription.png')}}" alt="Sbscription">
                </a>
            </li>
        </ul>
    </div>
@endsection