<div class="mainFooter">
    <div class="container footerBg pY2">
        <div class="footerNav hList pY1">
            <div class="comicShop">
                <ul class="comicsList vList">
                    <h4>DC COMICS</h4>
                    <li v-for="el in comicsList" class="comicsItem">
                        <a href="#">
                            @{{el}}
                        </a>
                    </li>
                </ul>
                <ul class="shopList vList">
                    <h4>Shop</h4>
                    <li v-for="el in shopList" class="shopItem">
                        <a href="#">
                            @{{el}}
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="dcList vList">
                <h4>DC</h4>
                <li v-for="el in dcList" class="dcItem">
                    <a href="#">
                        @{{el}}
                    </a>
                </li>
            </ul>
            <ul class="sitesList vList">
                <h4>SITES</h4>
                <li v-for="el in sitesList" class="sitesItem">
                    <a href="#">
                        @{{el}}
                    </a>
                </li>
            </ul>
        </div>
        <small class="copyInfo">
            All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <br>
            <a href="#">Cookies Settings</a>
        </small>
    </div>
    <div class="footerBottom">
        <div class="container bottomNav pY2">
            <button class="btn btnOutline">
                SIGN-UP NOW!
            </button>
            <ul class="socialsList hList">
                <h4 class="pX2">FOLLOW US</h4>
                <li v-for="el in socialsList" :class="el.name">
                    <a :href="el.link">
                        <i :class="el.icon"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>