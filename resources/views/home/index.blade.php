@extends('layouts.app')

@section('content')
    <main>
        @include('home.partials.index.slider')
        <div class="container">
            <div class="b-advantages js-custom-scrollbar">
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image"><img src="/images/Gabestore_icons_discounts.png" alt="Скидки<br> круглый год"></div>
                    <div class="b-advantages__item-text"> Скидки<br> круглый год</div>
                </div>
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image"><img src="/images/Gabestore_icons_support_24.png" alt="Круглосуточная<br> поддержка"></div>
                    <div class="b-advantages__item-text"> Круглосуточная<br> поддержка</div>
                </div>
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image"><img src="/images/Gabestore_icons_achievement_system.png" alt="Система<br> достижений"></div>
                    <div class="b-advantages__item-text"> Система<br> достижений</div>
                </div>
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image"><img src="/images/Gabestore_icons_active_community.png" alt="Активное<br> коммьюнити"></div>
                    <div class="b-advantages__item-text"> Активное<br> коммьюнити</div>
                </div>
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image"><img src="/images/Gabestore_icons_charity_events.png" alt="Любовь<br> к играм"></div>
                    <div class="b-advantages__item-text"> Любовь<br> к играм</div>
                </div>
            </div>
            <div class="b-paymentmethods">
                <div class="b-paymentmethods__items">
                    <div class="b-paymentmethods__title">мы принимаем</div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image"><img src="/images/icons-logo-visa.svg" alt="Visa"></div>
                    </div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image"><img src="/images/icons-logo-mastercard.svg" alt="Mastercard"></div>
                    </div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image"><img src="/images/icons-logo-mir.svg" alt="Мир"></div>
                    </div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image"><img src="/images/icons-logo-qiwi.svg" alt="QIWI"></div>
                    </div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image"><img src="/images/icons-logo-yookassa-w.svg" alt="Юkassa"></div>
                    </div>
                </div>
            </div>
            <div class="b-catalog b-catalog--mainpage js-tab">
                <div class="b-catalog__tabs js-custom-scrollbar">
                    <div class="b-catalog__tabs-item js-tab-button active" data-tab-index="1">Новинки</div>
                    <div class="b-catalog__tabs-item js-tab-button" data-tab-index="2"> Лидеры продаж</div>
                    <div class="b-catalog__tabs-item js-tab-button" data-tab-index="3">Последние поступления</div>
                    <div class="b-catalog__tabs-item js-tab-button" data-tab-index="4">Предзаказы </div>
                </div>
                <div class="b-catalog__tab-container active js-tab-content" data-tab-index="1">
                    <div class="b-catalog__tab-wrapper js-custom-scrollbar">

                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/the-darkside-detective-a-fumble-in-the-dark"><img class="lazyload" src="https://static.gabestore.ru/product/i7ChPvM2-aZhvFHpkJLlzvzj8TFm52zY.jpg" alt="The Darkside Detective: A Fumble in the Dark" data-image="https://static.gabestore.ru/product/i7ChPvM2-aZhvFHpkJLlzvzj8TFm52zY.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3304"></div></a><a class="shop-item__name" href="/game/the-darkside-detective-a-fumble-in-the-dark">The Darkside Detective: A Fumble in the Dark</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">3.45 $</div>
                                <div class="shop-item__price-discount">10%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3304">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/stellaris-nemesis"><img class="lazyload" src="https://static.gabestore.ru/product/n4nY0KcCtJQ_VohUODwLCcm-w67mpRXY.jpg" alt="Stellaris – Nemesis " data-image="https://static.gabestore.ru/product/n4nY0KcCtJQ_VohUODwLCcm-w67mpRXY.jpg">
                                <div class="shop-item__label">DLC</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3216"></div></a><a class="shop-item__name" href="/game/stellaris-nemesis">Stellaris – Nemesis </a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">5.21 $</div>
                                <div class="shop-item__price-discount">10%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3216">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/demon-skin"><img class="lazyload" src="https://static.gabestore.ru/product/UJJyfZ3X9x1b7_HsF6jysQFX4O0cPkJi.jpg" alt="Demon Skin" data-image="https://static.gabestore.ru/product/UJJyfZ3X9x1b7_HsF6jysQFX4O0cPkJi.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3319"></div></a><a class="shop-item__name" href="/game/demon-skin">Demon Skin</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">5.32 $</div>
                                <div class="shop-item__price-discount">8%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3319">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/borderlands-3-directors-cut-steam"><img class="lazyload" src="https://static.gabestore.ru/product/CUePCfLXKGHDs1XfLtpcKQhQx8QWA6-T.jpg" alt="Borderlands 3: Director's Cut (Steam)" data-image="https://static.gabestore.ru/product/CUePCfLXKGHDs1XfLtpcKQhQx8QWA6-T.jpg">
                                <div class="shop-item__label">DLC</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3309"></div></a><a class="shop-item__name" href="/game/borderlands-3-directors-cut-steam">Borderlands 3: Director's Cut (Steam)</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">8.39 $</div>
                                <div class="shop-item__price-discount">10%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3309">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/borderlands-3-directors-cut-epic-games"><img class="lazyload" src="https://static.gabestore.ru/product/-QB7yedqYdYVuHABS8JcHqACaDMPeS32.jpg" alt="Borderlands 3: Director's Cut (Epic Games)" data-image="https://static.gabestore.ru/product/-QB7yedqYdYVuHABS8JcHqACaDMPeS32.jpg">
                                <div class="shop-item__label">DLC</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3310"></div></a><a class="shop-item__name" href="/game/borderlands-3-directors-cut-epic-games">Borderlands 3: Director's Cut (Epic Games)</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">8.39 $</div>
                                <div class="shop-item__price-discount">10%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3310">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/before-your-eyes"><img class="lazyload" src="https://static.gabestore.ru/product/O2Od3pDq53SI90qwtkIqvM-hvxY7zVmE.jpg" alt="Before Your Eyes" data-image="https://static.gabestore.ru/product/O2Od3pDq53SI90qwtkIqvM-hvxY7zVmE.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3291"></div></a><a class="shop-item__name" href="/game/before-your-eyes">Before Your Eyes</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">3.09 $</div>
                                <div class="shop-item__price-discount">10%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3291">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/scarlet-hood-and-the-wicked-wood"><img class="lazyload" src="https://static.gabestore.ru/product/Bff2i4ToWuHEZBuZWZJgFFNrc2fDWLKF.jpg" alt="Scarlet Hood and the Wicked Wood" data-image="https://static.gabestore.ru/product/Bff2i4ToWuHEZBuZWZJgFFNrc2fDWLKF.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3293"></div></a><a class="shop-item__name" href="/game/scarlet-hood-and-the-wicked-wood">Scarlet Hood and the Wicked Wood</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">3.84 $</div>
                                <div class="shop-item__price-discount">20%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3293">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/totally-reliable-delivery-service"><img class="lazyload" src="https://static.gabestore.ru/product/u8dYW4RNfnw0v2WdC81vXvlaemsyNSxM.jpg" alt="Totally Reliable Delivery Service" data-image="https://static.gabestore.ru/product/u8dYW4RNfnw0v2WdC81vXvlaemsyNSxM.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3289"></div></a><a class="shop-item__name" href="/game/totally-reliable-delivery-service">Totally Reliable Delivery Service</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">3.99 $</div>
                                <div class="shop-item__price-discount">17%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3289">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/evil-genius-2-world-domination"><img class="lazyload" src="https://static.gabestore.ru/product/_nSFmYGCRJUTA2X5He0J1bKF3iw5glu3.jpg" alt="Evil Genius 2: World Domination" data-image="https://static.gabestore.ru/product/_nSFmYGCRJUTA2X5He0J1bKF3iw5glu3.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3245"></div></a><a class="shop-item__name" href="/game/evil-genius-2-world-domination">Evil Genius 2: World Domination</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">8.2 $</div>
                                <div class="shop-item__price-discount">15%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3245">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/narita-boy"><img class="lazyload" src="https://static.gabestore.ru/product/bnyPaYeBthYfU6Gvj6IEzzO3aIqTHvOH.jpg" alt="Narita Boy" data-image="https://static.gabestore.ru/product/bnyPaYeBthYfU6Gvj6IEzzO3aIqTHvOH.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3276"></div></a><a class="shop-item__name" href="/game/narita-boy">Narita Boy</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">9.32 $</div>
                                <div class="shop-item__price-discount">13%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3276">В&nbsp;корзину</a></div>

                    </div>
                    <div class="b-catalog__tab-link"><a class="btn btn--primary" href="/newgames">Cмотреть&nbsp;все</a></div>
                </div>
                <div class="b-catalog__tab-container js-tab-content" data-tab-index="2">
                    <div class="b-catalog__tab-wrapper js-custom-scrollbar">

                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/stellaris-nemesis"><img class="lazyload" src="https://static.gabestore.ru/product/n4nY0KcCtJQ_VohUODwLCcm-w67mpRXY.jpg" alt="Stellaris – Nemesis " data-image="https://static.gabestore.ru/product/n4nY0KcCtJQ_VohUODwLCcm-w67mpRXY.jpg">
                                <div class="shop-item__label">DLC</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3216"></div></a><a class="shop-item__name" href="/game/stellaris-nemesis">Stellaris – Nemesis </a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">5.21 $</div>
                                <div class="shop-item__price-discount">10%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3216">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/dying-light-the-following-enhanced-edition"><img class="lazyload" src="https://static.gabestore.ru/product/3EM8Ix4cxD3RFff0kxMPjoMDeI-fxYEg.jpg" alt="Dying Light – Enhanced Edition" data-image="https://static.gabestore.ru/product/3EM8Ix4cxD3RFff0kxMPjoMDeI-fxYEg.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="106"></div></a><a class="shop-item__name" href="/game/dying-light-the-following-enhanced-edition">Dying Light – Enhanced Edition</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">5.19 $</div>
                                <div class="shop-item__price-discount">70%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="106">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/doom-eternal-deluxe-edition"><img class="lazyload" src="https://static.gabestore.ru/product/aGT-AvqznGMG--Y_7MMPPCNstcswup0s.jpg" alt="DOOM Eternal – Deluxe Edition" data-image="https://static.gabestore.ru/product/aGT-AvqznGMG--Y_7MMPPCNstcswup0s.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="2396"></div></a><a class="shop-item__name" href="/game/doom-eternal-deluxe-edition">DOOM Eternal – Deluxe Edition</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">12.32 $</div>
                                <div class="shop-item__price-discount">67%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="2396">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/warhammer-vermintide-2"><img class="lazyload" src="https://static.gabestore.ru/product/BMfnXrESXap0br8SUBDpon02ZySuEuG3.jpg" alt="Warhammer: Vermintide 2" data-image="https://static.gabestore.ru/product/BMfnXrESXap0br8SUBDpon02ZySuEuG3.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="1354"></div></a><a class="shop-item__name" href="/game/warhammer-vermintide-2">Warhammer: Vermintide 2</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">1.99 $</div>
                                <div class="shop-item__price-discount">71%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="1354">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/insurgency-sandstorm"><img class="lazyload" src="https://static.gabestore.ru/product/1hvqpj7PvkaDUGLb1-OhFzh4b9za_s9a.jpg" alt="Insurgency: Sandstorm" data-image="https://static.gabestore.ru/product/1hvqpj7PvkaDUGLb1-OhFzh4b9za_s9a.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3275"></div></a><a class="shop-item__name" href="/game/insurgency-sandstorm">Insurgency: Sandstorm</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">7.32 $</div>
                                <div class="shop-item__price-discount">45%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3275">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/dark-souls-remastered"><img class="lazyload" src="https://static.gabestore.ru/product/ZxwlRRaXEKtwOqQdTSvlBH4LdBjS_xp2.jpg" alt="Dark Souls Remastered" data-image="https://static.gabestore.ru/product/ZxwlRRaXEKtwOqQdTSvlBH4LdBjS_xp2.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="1338"></div></a><a class="shop-item__name" href="/game/dark-souls-remastered">Dark Souls Remastered</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">7.99 $</div>
                                <div class="shop-item__price-discount">50%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="1338">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/skyrim-special-edition"><img class="lazyload" src="https://static.gabestore.ru/product/Vz0k6Ae_Imt7RafKLek060XwxAcwLhkO.jpg" alt="The Elder Scrolls V: Skyrim – Special Edition" data-image="https://static.gabestore.ru/product/Vz0k6Ae_Imt7RafKLek060XwxAcwLhkO.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="355"></div></a><a class="shop-item__name" href="/game/skyrim-special-edition">The Elder Scrolls V: Skyrim – Special Edition</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">9.32 $</div>
                                <div class="shop-item__price-discount">50%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="355">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/naruto-shippuden-ultimate-ninja-storm-4"><img class="lazyload" src="https://static.gabestore.ru/product/EEd9PtBEeYqp8XFmULWROijNKzzkNkWN.jpg" alt="NARUTO SHIPPUDEN: Ultimate Ninja STORM 4" data-image="https://static.gabestore.ru/product/EEd9PtBEeYqp8XFmULWROijNKzzkNkWN.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="560"></div></a><a class="shop-item__name" href="/game/naruto-shippuden-ultimate-ninja-storm-4">NARUTO SHIPPUDEN: Ultimate Ninja STORM 4</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">2.29 $</div>
                                <div class="shop-item__price-discount">77%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="560">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/tom-clancys-rainbow-six-siege"><img class="lazyload" src="https://static.gabestore.ru/product/0_j1Ci2n2Vnd2zVuX4WATB4juk1xtRzq.jpg" alt="Tom Clancy's Rainbow Six Siege" data-image="https://static.gabestore.ru/product/0_j1Ci2n2Vnd2zVuX4WATB4juk1xtRzq.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="97"></div></a><a class="shop-item__name" href="/game/tom-clancys-rainbow-six-siege">Tom Clancy's Rainbow Six Siege</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">5.53 $</div>
                                <div class="shop-item__price-discount">50%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="97">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/grand-theft-auto-v"><img class="lazyload" src="https://static.gabestore.ru/product/bzWYflpfTNj2oa93U4TuZdF44hDjW2Pb.jpg" alt="Grand Theft Auto V" data-image="https://static.gabestore.ru/product/bzWYflpfTNj2oa93U4TuZdF44hDjW2Pb.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="24"></div></a><a class="shop-item__name" href="/game/grand-theft-auto-v">Grand Theft Auto V</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">9.99 $</div>
                                <div class="shop-item__price-discount">50%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="24">В&nbsp;корзину</a></div>

                    </div>
                    <div class="b-catalog__tab-link"><a class="btn btn--primary" href="/top">Cмотреть&nbsp;все</a></div>
                </div>
                <div class="b-catalog__tab-container js-tab-content" data-tab-index="3">
                    <div class="b-catalog__tab-wrapper js-custom-scrollbar">

                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/sniper-elite-nazi-zombie-army"><img class="lazyload" src="https://static.gabestore.ru/product/9XdLfgUefanUD_4Gh65h5YJmK88KXQ78.jpg" alt="Sniper Elite: Nazi Zombie Army" data-image="https://static.gabestore.ru/product/9XdLfgUefanUD_4Gh65h5YJmK88KXQ78.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3328"></div></a><a class="shop-item__name" href="/game/sniper-elite-nazi-zombie-army">Sniper Elite: Nazi Zombie Army</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">2.32 $</div>
                                <div class="shop-item__price-discount">50%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3328">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/sniper-elite-4-deluxe-edition"><img class="lazyload" src="https://static.gabestore.ru/product/qPZTH3xnDy8ljfchxkz2o5OMHPGjGAyP.jpg" alt="Sniper Elite 4 Deluxe Edition" data-image="https://static.gabestore.ru/product/qPZTH3xnDy8ljfchxkz2o5OMHPGjGAyP.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3327"></div></a><a class="shop-item__name" href="/game/sniper-elite-4-deluxe-edition">Sniper Elite 4 Deluxe Edition</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">7.99 $</div>
                                <div class="shop-item__price-discount">60%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3327">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/sniper-elite"><img class="lazyload" src="https://static.gabestore.ru/product/zn7mxXk1YnOzaTvp4xZQmQUFwEs7dAka.jpg" alt="Sniper Elite" data-image="https://static.gabestore.ru/product/zn7mxXk1YnOzaTvp4xZQmQUFwEs7dAka.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3326"></div></a><a class="shop-item__name" href="/game/sniper-elite">Sniper Elite</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">1.25 $</div>
                                <div class="shop-item__price-discount">50%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3326">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/lords-of-the-realm-complete"><img class="lazyload" src="https://static.gabestore.ru/product/-sq-BREkhnPustP0hQEHy_liQXmeQd2R.jpg" alt="Lords of the Realm Complete" data-image="https://static.gabestore.ru/product/-sq-BREkhnPustP0hQEHy_liQXmeQd2R.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3325"></div></a><a class="shop-item__name" href="/game/lords-of-the-realm-complete">Lords of the Realm Complete</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">2.92 $</div>
                                <div class="shop-item__price-discount">24%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3325">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/battlezone-98-redux"><img class="lazyload" src="https://static.gabestore.ru/product/2pI4DDwVMxPrvXXLNdWcBR_QVrx3mz-j.jpg" alt="Battlezone 98 Redux" data-image="https://static.gabestore.ru/product/2pI4DDwVMxPrvXXLNdWcBR_QVrx3mz-j.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3321"></div></a><a class="shop-item__name" href="/game/battlezone-98-redux">Battlezone 98 Redux</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">1.72 $</div>
                                <div class="shop-item__price-discount">69%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3321">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/aliens-versus-predator-classic-2000"><img class="lazyload" src="https://static.gabestore.ru/product/ctS2Do15l7PVudZfG5t0_GoAMk6wy8fi.jpg" alt="Aliens versus Predator Classic 2000" data-image="https://static.gabestore.ru/product/ctS2Do15l7PVudZfG5t0_GoAMk6wy8fi.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3320"></div></a><a class="shop-item__name" href="/game/aliens-versus-predator-classic-2000">Aliens versus Predator Classic 2000</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">1.32 $</div>
                                <div class="shop-item__price-discount">23%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3320">В&nbsp;корзину</a></div>

                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/the-raven-remastered"><img class="lazyload" src="https://static.gabestore.ru/product/X_0Z1O1pNGMKiGl6WZNkm58UQwmOvgLu.jpg" alt="The Raven Remastered" data-image="https://static.gabestore.ru/product/X_0Z1O1pNGMKiGl6WZNkm58UQwmOvgLu.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3318"></div></a><a class="shop-item__name" href="/game/the-raven-remastered">The Raven Remastered</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">2.65 $</div>
                                <div class="shop-item__price-discount">67%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3318">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/the-book-of-unwritten-tales-collection"><img class="lazyload" src="https://static.gabestore.ru/product/xNRVkR-fZwHP-yz2KJSJQcRZdyxskENE.jpg" alt="The Book of Unwritten Tales Collection" data-image="https://static.gabestore.ru/product/xNRVkR-fZwHP-yz2KJSJQcRZdyxskENE.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3317"></div></a><a class="shop-item__name" href="/game/the-book-of-unwritten-tales-collection">The Book of Unwritten Tales Collection</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">3.99 $</div>
                                <div class="shop-item__price-discount">75%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3317">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/hunting-simulator-2-elite-edition"><img class="lazyload" src="https://static.gabestore.ru/product/C-LU-KEIkHAipqOqIVF7ADjgAMSA0Lrz.jpg" alt="Hunting Simulator 2 Elite Edition" data-image="https://static.gabestore.ru/product/C-LU-KEIkHAipqOqIVF7ADjgAMSA0Lrz.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3316"></div></a><a class="shop-item__name" href="/game/hunting-simulator-2-elite-edition">Hunting Simulator 2 Elite Edition</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">22.65 $</div>
                                <div class="shop-item__price-discount">32%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3316">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/freedom-fighters"><img class="lazyload" src="https://static.gabestore.ru/product/aB3LqlHSX-xYq_rZF8Ce19Eacs4UHeUM.jpg" alt="Freedom Fighters" data-image="https://static.gabestore.ru/product/aB3LqlHSX-xYq_rZF8Ce19Eacs4UHeUM.jpg">
                                <div class="shop-item__favorite js-addToFavorite " data-item-id="3315"></div></a><a class="shop-item__name" href="/game/freedom-fighters">Freedom Fighters</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">4.16 $</div>
                                <div class="shop-item__price-discount">50%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3315">В&nbsp;корзину</a></div>

                    </div>
                    <div class="b-catalog__tab-link"><a class="btn btn--primary" href="/newgames">Cмотреть&nbsp;все</a></div>
                </div>
                <div class="b-catalog__tab-container js-tab-content" data-tab-index="4">
                    <div class="b-catalog__tab-wrapper js-custom-scrollbar">

                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/motogp-21"><img class="lazyload" src="https://static.gabestore.ru/product/E9D3X5pzVY1KHAJa2SC4bRdIGDVUyPsp.jpg" alt="MotoGP 21" data-image="https://static.gabestore.ru/product/E9D3X5pzVY1KHAJa2SC4bRdIGDVUyPsp.jpg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3286"></div></a><a class="shop-item__name" href="/game/motogp-21">MotoGP 21</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">11.13 $</div>
                                <div class="shop-item__price-discount">10%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3286">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/total-war-rome-remastered"><img class="lazyload" src="https://static.gabestore.ru/product/rx6iDcRzqyMoWE8BG67a9sTBZkFn8cI3.jpeg" alt="Total War: ROME REMASTERED" data-image="https://static.gabestore.ru/product/rx6iDcRzqyMoWE8BG67a9sTBZkFn8cI3.jpeg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3226"></div></a><a class="shop-item__name" href="/game/total-war-rome-remastered">Total War: ROME REMASTERED</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">19.72 $</div>
                                <div class="shop-item__price-discount">14%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3226">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/resident-evil-village"><img class="lazyload" src="https://static.gabestore.ru/product/w8zWUQ1RBRZsSeCr8fo7n_7QnGevJHxo.jpg" alt="Resident Evil Village" data-image="https://static.gabestore.ru/product/w8zWUQ1RBRZsSeCr8fo7n_7QnGevJHxo.jpg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3125"></div></a><a class="shop-item__name" href="/game/resident-evil-village">Resident Evil Village</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">24.52 $</div>
                                <div class="shop-item__price-discount">8%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3125">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/shin-megami-tensei-iii-nocturne-hd-remaster-digital-deluxe-edition"><img class="lazyload" src="https://static.gabestore.ru/product/RZ92Q3bkCuPtvukEqECf82CMIKF1u5rL.jpeg" alt="Shin Megami Tensei III Nocturne HD Remaster Digital Deluxe Edition" data-image="https://static.gabestore.ru/product/RZ92Q3bkCuPtvukEqECf82CMIKF1u5rL.jpeg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3230"></div></a><a class="shop-item__name" href="/game/shin-megami-tensei-iii-nocturne-hd-remaster-digital-deluxe-edition">Shin Megami Tensei III Nocturne HD Remaster Digital Deluxe Edition</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">58.65 $</div>
                                <div class="shop-item__price-discount">12%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3230">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/biomutant"><img class="lazyload" src="https://static.gabestore.ru/product/VcAk31FA5BYn1jn9BzNRvYYSGAir-AdG.jpg" alt="BIOMUTANT" data-image="https://static.gabestore.ru/product/VcAk31FA5BYn1jn9BzNRvYYSGAir-AdG.jpg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3144"></div></a><a class="shop-item__name" href="/game/biomutant">BIOMUTANT</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">39.99 $</div>
                                <div class="shop-item__price-discount">12%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3144">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/shin-megami-tensei-iii-nocturne-hd-remaster"><img class="lazyload" src="https://static.gabestore.ru/product/o5oOPuJHlSdjEcuGwv_PgjRFpSUnccLP.jpeg" alt="Shin Megami Tensei III Nocturne HD Remaster" data-image="https://static.gabestore.ru/product/o5oOPuJHlSdjEcuGwv_PgjRFpSUnccLP.jpeg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3229"></div></a><a class="shop-item__name" href="/game/shin-megami-tensei-iii-nocturne-hd-remaster">Shin Megami Tensei III Nocturne HD Remaster</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">42.65 $</div>
                                <div class="shop-item__price-discount">11%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3229">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/the-elder-scrolls-online-blackwood-steam"><img class="lazyload" src="https://static.gabestore.ru/product/GY0f8G3QWHcH5FehL1t_N4ykwMqvfe4Q.jpg" alt="The Elder Scrolls Online: Blackwood (Steam)" data-image="https://static.gabestore.ru/product/GY0f8G3QWHcH5FehL1t_N4ykwMqvfe4Q.jpg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3130"></div></a><a class="shop-item__name" href="/game/the-elder-scrolls-online-blackwood-steam">The Elder Scrolls Online: Blackwood (Steam)</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">31.32 $</div>
                                <div class="shop-item__price-discount">6%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3130">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/chivalry-2"><img class="lazyload" src="https://static.gabestore.ru/product/I5088VPk6xszPpkTKJgSrSeGaihVVk2z.jpg" alt="Chivalry 2" data-image="https://static.gabestore.ru/product/I5088VPk6xszPpkTKJgSrSeGaihVVk2z.jpg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3169"></div></a><a class="shop-item__name" href="/game/chivalry-2">Chivalry 2</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">13.59 $</div>
                                <div class="shop-item__price-discount">15%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3169">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/scarlet-nexus"><img class="lazyload" src="https://static.gabestore.ru/product/qHk5r8-aTfknCb2kqfU9qxPZsnUEyBFp.jpg" alt="SCARLET NEXUS" data-image="https://static.gabestore.ru/product/qHk5r8-aTfknCb2kqfU9qxPZsnUEyBFp.jpg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3211"></div></a><a class="shop-item__name" href="/game/scarlet-nexus">SCARLET NEXUS</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">21.59 $</div>
                                <div class="shop-item__price-discount">10%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3211">В&nbsp;корзину</a></div>
                        <div class="shop-item">
                            <a class="shop-item__image" href="/game/humankind-deluxe-edition"><img class="lazyload" src="https://static.gabestore.ru/product/ooqcc3CEv7pLg44GDwIqZ2S-xiEaEuVD.jpg" alt="HUMANKIND – Deluxe Edition" data-image="https://static.gabestore.ru/product/ooqcc3CEv7pLg44GDwIqZ2S-xiEaEuVD.jpg">
                                <div class="shop-item__label">Предзаказ</div> <div class="shop-item__favorite js-addToFavorite " data-item-id="3068"></div></a><a class="shop-item__name" href="/game/humankind-deluxe-edition">HUMANKIND – Deluxe Edition</a>
                            <div class="shop-item__price">
                                <div class="shop-item__price-current">29.2 $</div>
                                <div class="shop-item__price-discount">20%</div> </div>
                            <a class="btn btn--primary js-addToCart " href="/basket" data-item-id="3068">В&nbsp;корзину</a></div>

                    </div>
                    <div class="b-catalog__tab-link"><a class="btn btn--primary" href="/preorders">Cмотреть&nbsp;все</a></div>
                </div>
            </div>
            <div class="b-ourchoise">
                <h3 class="b-ourchoise__titel">наш выбор</h3>
                <div class="b-ourchoise__wrapper">
                    <div class="b-control b-control--ourchoise">
                        <div class="b-control__btn b-control__btn--up js-ourslide-prev"></div>
                        <div class="b-control__progressbar">
                            <div class="b-control__progressbar-value"></div>
                        </div>
                        <div class="b-control__btn b-control__btn--down js-ourslide-next"></div>
                    </div>
                    <div class="b-ourchoise__slider js-slider-ourchoise">
                        <div class="b-ourchoise__slide">
                            <a class="b-ourchoise-item" href="/game/the-dark-pictures-anthology-man-of-medan">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/vnmQ3DOovOsGc1Y4T7gbqeIWpJWtNX4g.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">The Dark Pictures Anthology: Man of Medan</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">6.65 $</div>
                                            <div class="b-ourchoise-item__price-discount">-50%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="2443">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/dark-souls-2-scholar-of-the-first-sin">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/OPdvOLzsZeVvdL9fIBuTaABcFmdr9GzQ.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Dark Souls 2: Scholar of the First Sin</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">4.79 $</div>
                                            <div class="b-ourchoise-item__price-discount">-70%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="50">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-ourchoise__slide">
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/insurgency">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/-xsgySr6CgzfO3eEbe9xEThm2vOgt-E1.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Insurgency</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">2.25 $</div>
                                            <div class="b-ourchoise-item__price-discount">-32%</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item" href="/game/fifa-21">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/A0FCRdyW1b73IknH1Fjr4M1uB532k0uB.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">FIFA 21</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">23.99 $</div>
                                            <div class="b-ourchoise-item__price-discount">-49%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="2988">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-ourchoise__slide">
                            <a class="b-ourchoise-item" href="/game/kenshi">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/Qv1GJGrwhbiX-fRZyA2krC-F2GzuP-i5.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Kenshi</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">5.13 $</div>
                                            <div class="b-ourchoise-item__price-discount">-25%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="2497">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/tom-clancys-the-division">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/KgFzfXdvLeGjbVJxK4b6p6alO8-kUMhl.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Tom Clancy's The Division</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">6.65 $</div>
                                            <div class="b-ourchoise-item__price-discount">-60%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="19">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-ourchoise__slide">
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/tom-clancys-rainbow-six-siege">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/UWTcq8mGlGJ7FYTIixFWAtxBtWpyObQz.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Tom Clancy's Rainbow Six Siege</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">5.53 $</div>
                                            <div class="b-ourchoise-item__price-discount">-50%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="97">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item" href="/game/titanfall-2">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/MtVhCFgmXBs5eJ77NidIjxQJ5BBoINRl.jpeg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">TitanFall 2</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">5.32 $</div>
                                            <div class="b-ourchoise-item__price-discount">-60%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="886">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-ourchoise__slide">
                            <a class="b-ourchoise-item" href="/game/grand-theft-auto-v-premium-online-edition">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/HpKRknmI1UmhZpomsulmEVxSJJNxer9U.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Grand Theft Auto V: Premium Online Edition</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">10.65 $</div>
                                            <div class="b-ourchoise-item__price-discount">-55%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="1179">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/assassins-creed-origins">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/jemGpqvLCP2FOh9NinqISmxUoWWLIsLW.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Assassin's Creed Origins</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">7.32 $</div>
                                            <div class="b-ourchoise-item__price-discount">-73%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="892">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-ourchoise__slide">
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/dark-souls-3-deluxe-edition">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/ViAvTBhwgJUDcKPuoOOP6CVbxxmWOPp6.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Dark Souls 3 – Deluxe Edition</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">11.99 $</div>
                                            <div class="b-ourchoise-item__price-discount">-70%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="32">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item" href="/game/red-dead-redemption-2">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/tb-051MUpwLdqyHt8J7qGloUF2QMT-ZX.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Red Dead Redemption 2</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">22.32 $</div>
                                            <div class="b-ourchoise-item__price-discount">-33%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="2525">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-ourchoise__slide">
                            <a class="b-ourchoise-item" href="/game/naruto-shippuden-ultimate-ninja-storm-4">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/A_NnZuFByozTNLEvEiyLndY_LgddI3XI.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">NARUTO SHIPPUDEN: Ultimate Ninja STORM 4</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">2.29 $</div>
                                            <div class="b-ourchoise-item__price-discount">-77%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="560">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/fallout-new-vegas-ultimate-edition">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/Y_lgQmghmffvxB0Iw39VeRq6Js7qA8ri.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Fallout: New Vegas – Ultimate Edition</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">3.13 $</div>
                                            <div class="b-ourchoise-item__price-discount">-45%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="140">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-ourchoise__slide">
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/dark-souls-remastered">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/1XlrxTwlbTDXnL3OeDZ59u76Ml0sFnd6.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Dark Souls Remastered</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">7.99 $</div>
                                            <div class="b-ourchoise-item__price-discount">-50%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="1338">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item" href="/game/for-honor">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/1jhw_J3M2C-yDRD1kq_LpAdcvMrD_Zbd.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">For Honor</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">5.32 $</div>
                                            <div class="b-ourchoise-item__price-discount">-68%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="/basket" data-item-id="283">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('home.partials.index.blog')
        </div>
        <script type="text/javascript">
            window.tConfig = {
                slides: [
                    'https://static.gabestore.ru/category/AsqiofLp5vi6l96_fpQzwIqCYSRn9I4w.jpg',
                    'https://static.gabestore.ru/category/VrWh0iU2Cp0_rN6ibXwqIp4TbKkaEfQA.jpg',
                    'https://static.gabestore.ru/category/nRyspxSw4hEe-YjWriCd0YvjAHfeGkyx.jpg',
                    'https://static.gabestore.ru/category/FB5bt_HIhqKM89Mz4bRCape6YlglwJkz.jpg',
                    'https://static.gabestore.ru/category/GE2nec8aGbX_MPC_izR9UhpaPWXHnur1.jpg',
                    'https://static.gabestore.ru/category/x6xceoLncQ_OWcZxr9TplXEM8Qzycg_5.jpg',
                ]
            };
        </script>
    </main>
@endsection
