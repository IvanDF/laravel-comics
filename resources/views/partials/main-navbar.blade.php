<div class="logoImg">
    <a href="{{route('home')}}">
        <img class="imgResp" src="{{ asset('img/header/logo.png')}}" alt="DC Logo">
    </a>
</div>
<ul class="mainNavList hList txtUpper">
    <li v-for="(el, i) in mainNavbar" 
        :class="['mainNavItem pX1', el.dropdown ? 'dropdown' : '']"
        @click="showDropdown(i)"
    >
        <a href="#">@{{ el.name }} <i v-if="el.dropdown" :class="el.icon"></i></a>
        <transition name="slide-fade">
            <ul class="dropdownMenu vList" v-if="el.dropdown" v-show="navItemIndex === i">
                <li v-for="item in el.dropdown" class="dropdownItem">
                    <a href="#">
                        @{{item}}
                    </a>
                </li>
            </ul>
        </transition>
    </li>
</ul>
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