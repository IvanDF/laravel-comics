<header class="mainHeader">
    <div class="primaryBg">
        <div class="container navTop">
            <ul class="hList navTopList">
                <li class="navTopItem pX5">
                    <a href="#">
                        DC POWER <span class="apex">SM</span> VISA <span class="apex">&copy;</span>
                    </a>
                </li>
                <li v-for="(el, i) in navbarTop" 
                    class="navTopItem"
                    @click="navTopActive = !navTopActive"
                >
                    <a href="#">
                        @{{el.name}}<i v-if="el.icon" :class="el.icon"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <transition name="navTopSlide">
        <ul v-for="(el, i) in navbarTop" class="topDropdown pY1" v-if="navTopActive">
            <div class="container hList topDropdownMenu">
                <li v-for="e in el.topDropdown" class="topDropdownItem">
                    <a href="#">@{{e}}</a>
                </li>
            </div>
        </ul>
    </transition>
    <nav :class="['stickyNav pY1', !showNavbar ? 'hidden' : '']">
        <div class="container mainNav">
            @include('partials.main-navbar')
        </div>
    </nav>
</header>