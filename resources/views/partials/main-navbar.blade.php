<div class="logoImg">
    <a href="{{route('home')}}">
        <img class="imgResp" src="{{ asset('img/header/logo.png')}}" alt="DC Logo">
    </a>
</div>
<div class="hamburger-menu">
    <span></span>
    <span></span>
    <span></span>
</div>
<main-navbar></main-navbar>
<div class="search">
    <input :class="['searchBar txtRight pX1', searchActive ? 'searchActive' : '']" 
        type="text" 
        :placeholder="searchActive ? 'WHAT ARE YOU LOOKING FOR?' : 'Search'" 
        @focus="searchActive = !searchActive"
        @focusout="searchActive = false"
    >
    <i class="searchIcon fas fa-search"></i>
    <i class="exitIcon fas fa-times" v-if="searchActive" @click="searchActive = false"></i>
</div>