<div class="containerSmall comicDetail pY3">
    <div class="comicInfo pX1">
        <h3>{{$comic['title']}}</h3>
        <div class="buyComic mY2">
            <div class="price">
                <span>U.S. Price: <strong> ${{$comic['price']}}</strong></span>
                <span class="availableDate">AVAILABLE ON 11/10</span>
            </div>
            <span class="stock">Check Availability <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="description">
            <p>{!! $comic['body'] !!}</p>
        </div>
    </div>
    <div class="adv pX1 txtRight">
        <h4>ADVERTISEMENT</h4>
        <img class="imgResp" src="{{ asset('img/adv/adv.png')}}" alt="">
    </div>
</div>
<div class="moreDetail pY3">
    <div class="containerSmall moreInfo">
        <div class="moreInfoList">
            <ul class="talentList pX2 vList">
                <h4 class="pY1">Talent</h4>
                <li class="talentItem">
                    <span>Art By:</span>
                    <div class="names">
                        <span class="active">Sandy Jarrel</span>, <span class="active">Agnes Garbowska</span>
                    </div>
                </li>
                <li class="talentItem">
                    <span>Written By:</span>
                    <div class="names">
                        <span class="active">P.C. Morrissey</span>, <span class="active">Heather Nuhfer</span>
                    </div>
                </li>
            </ul>
            <ul class="specsList pX2 vList">
                <h4 class="pY1">Specs</h4>
                <li class="specsItem">
                    <span>Series:</span>
                    <div class="names">
                        <span class="active">{{$comic['title']}}</span>
                    </div>
                </li>
                <li class="specsItem">
                    <span>U.S. Price:</span>
                    <div class="names">
                        9.99
                    </div>
                </li>
                <li class="specsItem">
                    <span>On Sale Date:</span>
                    <div class="names">
                        Nov 10 2020
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Info bar -->
    <div class="infoBar mY2">
        <div class="containerSmall">

            <ul class="infoBarList hListCenter">
                <li class="infoBarItem">
                    <a href="#">
                        <h5 class="txtUpper">Digital comics</h5>
                        <img src="{{ asset('img/comics/info-bar/digital.png')}}" alt="">
                    </a>
                </li>
                <li class="infoBarItem">
                    <a href="#">
                        <h5 class="txtUpper">Sbscription</h5>
                        <img src="{{ asset('img/comics/info-bar/shop.png')}}" alt="Sbscription">
                    </a>
                </li>
                <li class="infoBarItem">
                    <a href="#">
                        <h5 class="txtUpper">Comic shop leocator</h5>
                        <img src="{{ asset('img/comics/info-bar/locator.png')}}" alt="Comic shop leocator">
                    </a>
                </li>
                <li class="infoBarItem">
                    <a href="#">
                        <h5 class="txtUpper">DC power visa</h5>
                        <img src="{{ asset('img/comics/info-bar/subscription.png')}}" alt="DC power visa">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>