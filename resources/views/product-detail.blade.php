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
@endsection