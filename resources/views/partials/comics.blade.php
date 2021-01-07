<div class="hero">
    <img class="heroBg" src="{{ asset('img/hero/bg-hero-home.jpg')}}" alt="Background hero home">
    <div class="comicPreview containerSmall">
        <img class="coverImg" src="{{ asset('img/hero/cover-home.jpg')}}" alt="Cover Home">
    </div>
</div>

<section class="comics pt-1">
    @include('partials.comics-list')
</section>