@extends('layouts.app')

@section('title', 'GabeStore — магазин игр на ПК')

@section('content')
    <main>
        @include('home.partials.index.slider')
        <div class="container">
            <div class="b-advantages js-custom-scrollbar">
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image">
                        <img src="{{ asset('images/Gabestore_icons_discounts.png') }}" alt="Скидки<br> круглый год">
                    </div>
                    <div class="b-advantages__item-text"> Скидки<br> круглый год</div>
                </div>
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image">
                        <img src="{{ asset('images/Gabestore_icons_support_24.png') }}" alt="Круглосуточная<br> поддержка">
                    </div>
                    <div class="b-advantages__item-text"> Круглосуточная<br> поддержка</div>
                </div>
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image">
                        <img src="{{ asset('images/Gabestore_icons_achievement_system.png') }}" alt="Система<br> достижений">
                    </div>
                    <div class="b-advantages__item-text"> Система<br> достижений</div>
                </div>
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image">
                        <img src="{{ asset('images/Gabestore_icons_active_community.png') }}" alt="Активное<br> коммьюнити">
                    </div>
                    <div class="b-advantages__item-text"> Активное<br> коммьюнити</div>
                </div>
                <div class="b-advantages__item">
                    <div class="b-advantages__item-image">
                        <img src="{{ asset('images/Gabestore_icons_charity_events.png') }}" alt="Любовь<br> к играм">
                    </div>
                    <div class="b-advantages__item-text"> Любовь<br> к играм</div>
                </div>
            </div>
            <div class="b-paymentmethods">
                <div class="b-paymentmethods__items">
                    <div class="b-paymentmethods__title">мы принимаем</div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image">
                            <img src="{{ asset('images/icons-logo-visa.svg') }}" alt="Visa">
                        </div>
                    </div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image">
                            <img src="{{ asset('images/icons-logo-mastercard.svg') }}" alt="Mastercard">
                        </div>
                    </div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image">
                            <img src="{{ asset('images/icons-logo-mir.svg') }}" alt="Мир">
                        </div>
                    </div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image">
                            <img src="{{ asset('images/icons-logo-qiwi.svg') }}" alt="QIWI">
                        </div>
                    </div>
                    <div class="b-paymentmethods__item">
                        <div class="b-paymentmethods__item-image">
                            <img src="{{ asset('images/icons-logo-yookassa-w.svg') }}" alt="Юkassa">
                        </div>
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
                        @for ($i = 0; $i < 10; $i++)
                            <div class="shop-item">
                                <a class="shop-item__image" href="/game/the-darkside-detective-a-fumble-in-the-dark">
                                    <img
                                        class="lazyload"
                                        src="https://static.gabestore.ru/product/i7ChPvM2-aZhvFHpkJLlzvzj8TFm52zY.jpg"
                                        alt="The Darkside Detective: A Fumble in the Dark"
                                        data-image="https://static.gabestore.ru/product/i7ChPvM2-aZhvFHpkJLlzvzj8TFm52zY.jpg"
                                    >
                                    <div class="
                                        shop-item__favorite
                                        {{ Auth::check() ? 'js-addToFavorite' : 'js-modal-open' }}
                                    "
                                    data-item-id="3304"
                                    @guest data-modal="login" @endguest
                                    ></div>
                                </a>
                                <a class="shop-item__name" href="/game/the-darkside-detective-a-fumble-in-the-dark">
                                    The Darkside Detective: A Fumble in the Dark
                                </a>
                                <div class="shop-item__price">
                                    <div class="shop-item__price-current">259 ₽</div>
                                    <div class="shop-item__price-discount">10%</div>
                                </div>
                                <a class="btn btn--primary js-addToCart" href="{{ route('basket.index') }}" data-item-id="3304">
                                    В&nbsp;корзину
                                </a>
                            </div>
                        @endfor
                    </div>
                    <div class="b-catalog__tab-link">
                        <a class="btn btn--primary" href="/newgames">Cмотреть&nbsp;все</a>
                    </div>
                </div>
                <div class="b-catalog__tab-container js-tab-content" data-tab-index="2">
                    <div class="b-catalog__tab-wrapper js-custom-scrollbar">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="shop-item">
                                <a class="shop-item__image" href="/game/stellaris-nemesis">
                                    <img class="lazyload"
                                         src="https://static.gabestore.ru/product/n4nY0KcCtJQ_VohUODwLCcm-w67mpRXY.jpg"
                                         alt="Stellaris – Nemesis "
                                         data-image="https://static.gabestore.ru/product/n4nY0KcCtJQ_VohUODwLCcm-w67mpRXY.jpg"
                                    >
                                    <div class="shop-item__label">DLC</div>
                                    <div
                                        class="shop-item__favorite {{ Auth::check() ? 'js-addToFavorite' : 'js-modal-open' }} "
                                        data-item-id="3216"
                                        @guest data-modal="login" @endguest
                                    ></div>
                                </a>
                                <a class="shop-item__name" href="/game/stellaris-nemesis">
                                    Stellaris – Nemesis
                                </a>
                                <div class="shop-item__price">
                                    <div class="shop-item__price-current">259 ₽</div>
                                    <div class="shop-item__price-discount">10%</div>
                                </div>
                                <a class="btn btn--primary js-addToCart " href="{{ route('basket.index') }}" data-item-id="3216">
                                    В&nbsp;корзину
                                </a>
                            </div>
                        @endfor
                    </div>
                    <div class="b-catalog__tab-link">
                        <a class="btn btn--primary" href="/top">Cмотреть&nbsp;все</a>
                    </div>
                </div>
                <div class="b-catalog__tab-container js-tab-content" data-tab-index="3">
                    <div class="b-catalog__tab-wrapper js-custom-scrollbar">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="shop-item">
                                <a class="shop-item__image" href="/game/sniper-elite-nazi-zombie-army">
                                    <img
                                        class="lazyload"
                                        src="https://static.gabestore.ru/product/9XdLfgUefanUD_4Gh65h5YJmK88KXQ78.jpg"
                                        alt="Sniper Elite: Nazi Zombie Army"
                                        data-image="https://static.gabestore.ru/product/9XdLfgUefanUD_4Gh65h5YJmK88KXQ78.jpg"
                                    >
                                    <div
                                        class="shop-item__favorite {{ Auth::check() ? 'js-addToFavorite' : 'js-modal-open' }} "
                                        data-item-id="3328"
                                        @guest data-modal="login" @endguest
                                    ></div>
                                </a>
                                <a class="shop-item__name" href="/game/sniper-elite-nazi-zombie-army">
                                    Sniper Elite: Nazi Zombie Army
                                </a>
                                <div class="shop-item__price">
                                    <div class="shop-item__price-current">259 ₽</div>
                                    <div class="shop-item__price-discount">50%</div> </div>
                                <a class="btn btn--primary js-addToCart " href="{{ route('basket.index') }}" data-item-id="3328">В&nbsp;корзину</a>
                            </div>
                        @endfor
                    </div>
                    <div class="b-catalog__tab-link">
                        <a class="btn btn--primary" href="/newgames">Cмотреть&nbsp;все</a>
                    </div>
                </div>
                <div class="b-catalog__tab-container js-tab-content" data-tab-index="4">
                    <div class="b-catalog__tab-wrapper js-custom-scrollbar">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="shop-item">
                                <a class="shop-item__image" href="/game/motogp-21">
                                    <img
                                        class="lazyload"
                                        src="https://static.gabestore.ru/product/E9D3X5pzVY1KHAJa2SC4bRdIGDVUyPsp.jpg"
                                        alt="MotoGP 21"
                                        data-image="https://static.gabestore.ru/product/E9D3X5pzVY1KHAJa2SC4bRdIGDVUyPsp.jpg"
                                    >
                                    <div class="shop-item__label">Предзаказ</div>
                                    <div
                                        class="shop-item__favorite {{ Auth::check() ? 'js-addToFavorite' : 'js-modal-open' }} "
                                        data-item-id="3286"
                                        @guest data-modal="login" @endguest
                                    ></div>
                                </a>
                                <a class="shop-item__name" href="/game/motogp-21">MotoGP 21</a>
                                <div class="shop-item__price">
                                    <div class="shop-item__price-current">259 ₽</div>
                                    <div class="shop-item__price-discount">10%</div> </div>
                                <a class="btn btn--primary js-addToCart " href="{{ route('basket.index') }}" data-item-id="3286">В&nbsp;корзину</a>
                            </div>
                        @endfor
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-50%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="2443">В&nbsp;корзину</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/dark-souls-2-scholar-of-the-first-sin">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/OPdvOLzsZeVvdL9fIBuTaABcFmdr9GzQ.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Dark Souls 2: Scholar of the First Sin</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-70%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="50">В&nbsp;корзину</div> </div>
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-49%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="2988">В&nbsp;корзину</div> </div>
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-25%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="2497">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/tom-clancys-the-division">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/KgFzfXdvLeGjbVJxK4b6p6alO8-kUMhl.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Tom Clancy's The Division</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-60%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="19">В&nbsp;корзину</div> </div>
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-50%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="97">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item" href="/game/titanfall-2">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/MtVhCFgmXBs5eJ77NidIjxQJ5BBoINRl.jpeg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">TitanFall 2</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-60%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="886">В&nbsp;корзину</div> </div>
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-55%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="1179">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/assassins-creed-origins">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/jemGpqvLCP2FOh9NinqISmxUoWWLIsLW.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Assassin's Creed Origins</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-73%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="892">В&nbsp;корзину</div> </div>
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-70%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="32">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item" href="/game/red-dead-redemption-2">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/tb-051MUpwLdqyHt8J7qGloUF2QMT-ZX.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Red Dead Redemption 2</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-33%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="2525">В&nbsp;корзину</div> </div>
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-77%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="560">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item b-ourchoise-item--half" href="/game/fallout-new-vegas-ultimate-edition">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/Y_lgQmghmffvxB0Iw39VeRq6Js7qA8ri.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">Fallout: New Vegas – Ultimate Edition</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-45%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="140">В&nbsp;корзину</div> </div>
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
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-50%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="1338">В&nbsp;корзину</div> </div>
                                    </div>
                                </div>
                            </a>
                            <a class="b-ourchoise-item" href="/game/for-honor">
                                <div class="b-ourchoise-item__image"><img src="https://static.gabestore.ru/product/1jhw_J3M2C-yDRD1kq_LpAdcvMrD_Zbd.jpg" alt=""></div>
                                <div class="b-ourchoise-item__container">
                                    <div class="b-ourchoise-item__info">
                                        <div class="b-ourchoise-item__title">For Honor</div>
                                        <div class="b-ourchoise-item__price">
                                            <div class="b-ourchoise-item__price-current">259 ₽</div>
                                            <div class="b-ourchoise-item__price-discount">-68%</div>
                                            <div class="btn btn--primary js-addToCart " data-href="{{ route('basket.index') }}" data-item-id="283">В&nbsp;корзину</div> </div>
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
