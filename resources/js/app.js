require('./bootstrap');
import { method } from 'lodash';
import Vue from 'vue';

new Vue ({
    el: '#DC',
    data: {

        showNavbar: true,
        scrollPos: 0,

        // Top navbar
        navTopActive: false,
        navbarTop: [
            {
                name: 'ADDITIONAL DC SITES',
                icon: 'fas fa-caret-down',
                topDropdown: [
                    'DC',
                    'MAD MAGAZINE',
                    'DC KIDS',
                    'DC UNIVERSE'
                ]
            }
        ],

        // Main navbar
        navItemIndex: '',   
        searchActive: false,
        mainNavbar: [
            {
                name: 'Characters',
            },
            {
                name: 'Comics',
            },
            {
                name: 'Movies',
            },
            {
                name: 'TV',
            },
            {
                name: 'Games',
            },
            {
                name: 'Collectibles',
            },
            {
                name: 'Videos',
            },
            {
                name: 'Fans',
            },
            {
                name: 'News',
            },
            {
                name: 'Shop',
                icon: 'fas fa-caret-down',
                dropdown: [
                    'Shop DC',
                    'Shop DC Collectibles',
                    'Print Subscription',
                    'Comic shop locator',
                ]
            },
        ],

        // Footer menus
        comicsList: [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        shopList: [
            'Shop DC',
            'Shop DC Collectibles',
        ],
        dcList: [
            'Terms Of Use',
            'Privacy Policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshop',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us',
        ],
        sitesList: [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
        ],

        // Socials
        socialsList: [
            {
                name: 'facebook',
                link: 'https://www.facebook.com/dccomics',
                icon: 'fab fa-facebook-f',

            },
            {
                name: 'twitter',
                link: 'https://twitter.com/dccomics',
                icon: 'fab fa-twitter',

            },
            {
                name: 'youtube',
                link: 'http://www.youtube.com/user/DCEntertainmentTV',
                icon: 'fab fa-youtube',

            },
            {
                name: 'pinterest',
                link: 'http://www.pinterest.com/dccomics/',
                icon: 'fab fa-pinterest',

            },
            {
                name: 'periscope',
                link: 'https://www.periscope.tv/DCComics',
                icon: 'fab fa-periscope',

            },
        ]
    },
    mounted () {
        window.addEventListener('scroll', this.onScroll);
    },
    created() {
        window.addEventListener('scroll', this.scrollTop);
    },
    methods: {

        onScroll () {

            const currentScrollPosition = window.pageYOffset;

            if (currentScrollPosition < 0) {
              return;
            }

            if (Math.abs(currentScrollPosition - this.scrollPos) < 60) {
              return;
            }

            this.showNavbar = currentScrollPosition < this.scrollPos;
            this.scrollPos = currentScrollPosition;
        },

        scrollTop () {

            let header = document.querySelector(".stickyNav");

            if (window.scrollY > 50 && !header.className.includes('scrolled')) {
                header.classList.add('scrolled'); 
            } else if (window.scrollY < 50) {
                header.classList.remove('scrolled');
            }
        },

        // show/hide dropdown
        showDropdown(index) {
            if ( this.navItemIndex === '' ) {
                this.navItemIndex = index;
            } else {
                this.navItemIndex = ''
            }
        },
    },
    beforeDestroy () {
        window.removeEventListener('scroll', this.onScroll)
    },
    destroyed () {
        window.removeEventListener('scroll', this.handleSCroll);
    },
});