@extends('layouts.main-content')

@section('page-title')
        <title>Titolo</title>
@endsection

@section('content')
    <div class="hero">
        <img class="imgResp" src="{{ $comic['image-hero'] }}" alt="Background hero home">
        <div class="comicPreview containerSmall">
            <img class="coverImg" src="{{ $comic['image-cover'] }}" alt="Cover Home">
        </div>
    </div>

    <section class="comic pt-1 pb-1">
        <div class="containerSmall">
            <h2>{{$comic['title']}}</h2>
            <div class="price">
                U.S. Price: ${{ $comic['price'] }}
            </div>
            <div class="descr">
                {!! $comic['body'] !!}
            </div>
        </div>
    </section>
@endsection