@if (!empty($comic))
    <div class="hero" style="background-image: url({{$comic['image-hero']}})">
        <div class="container heroContent">
            <img src="{{ $comic['image-cover']}}" alt="Cover home">
        </div>
    </div>
@endif
@if (!empty($comics))
    <div class="hero">
        <div class="container heroContent">
            <img src="{{ asset('./img/comics/cover-home.jpg')}}" alt="Cover home">
        </div>
    </div>
@endif