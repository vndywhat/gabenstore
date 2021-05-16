@extends('layouts.app')

@section('title', 'Ваша корзина')

@section('content')
    <main>
        <div class="b-content__layout b-content__layout--sticky">
            <div class="b-content__container">
                <div class="b-breadcrumbs">
                    <a class="b-breadcrumbs__item" href="{{ route('home.index') }}">Главная</a>
                    <a class="b-breadcrumbs__item" href="{{ route('basket.index') }}">Ваша корзина</a>
                </div>
                @if(true)
                    <div class="b-cart b-cart--empty-cart">
                        <div class="h4">В&nbsp;вашей корзине еще ничего нет :(</div>
                        <a class="btn btn--primary" href="/catalog">
                            перейти в каталог
                        </a>
                    </div>
                @else
                    <div class="b-content__wrapper">
                        <div class="b-cart">
                            <div class="b-cart__wrapper">
                                <div class="b-cart__left-side">
                                    <h1 class="text-center-mobile">
                                        Мой заказ <span class="js-cart-count-items">1</span>
                                    </h1>
                                    <div class="b-cart__list">
                                        <div class="shop-item-inline" data-id="1354">
                                            <div class="shop-item-inline__image">
                                                <a href="/game/warhammer-vermintide-2">
                                                    <img
                                                        src="https://static.gabestore.ru/product/BMfnXrESXap0br8SUBDpon02ZySuEuG3.jpg"
                                                        alt="" srcset="">
                                                </a>
                                            </div>
                                            <div class="shop-item-inline__content">
                                                <div class="shop-item-inline__title">
                                                    <div class="shop-item-inline__title-text">
                                                        Warhammer: Vermintide 2
                                                    </div>
                                                    <div class="shop-item-inline__title-sub">
                                                        <a class="js-removeFromCart btn btn--remove" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="shop-item-inline__price">
                                                    <div class="shop-item-inline__price-item">
                                                        <div class="shop-item-inline__price-current">149 ₽</div>
                                                    </div>
                                                    <div class="shop-item-inline__price-item">
                                                        <div class="shop-item-inline__price-old">515 ₽</div>
                                                    </div>
                                                    <div class="shop-item-inline__price-item">
                                                        <div class="shop-item-inline__price-discount">-71%</div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="shop-item-inline__detail">
                                                    <div class="shop-item-inline__detail-item">
                                                        Регион активации: <span>Россия</span>
                                                    </div>
                                                    <div class="shop-item-inline__detail-item">
                                                        Сервис активации: <span>Steam</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-content__wrapper"></div>
                                </div>
                                <div class="b-cart__right-side b-cart__right-side--sticky">
                                    <div class="b-cart__total">
                                        <div class="b-cart__total-main">
                                            <div class="b-cart__total-title">Итого</div>
                                            <div class="b-cart__total-price js-cart-price"><span>149</span>₽</div>
                                        </div>
                                        <button class="btn btn--primary js-modal-open" data-modal="login">
                                            Оформить заказ
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="b-content__wrapper"></div>
            </div>
        </div>

        <div class="b-dialog js-dialog" data-dialog="payment_success">
            <div class="b-dialog__wrapper">
                <div class="b-dialog__content">
                    <div class="b-dialog__container">
                        <div class="b-dialog__close text-center js-close-dialog">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L20 20" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M1 20L20 1" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="h4 text-center">Оплата</div>
                        <div class="b-dialog__text"></div>
                    </div>
                </div>
            </div>
        </div>


        <div style="display:none">
            <div id="js-cart-price"><span>0</span>₽</div>
            <div id="js-cart-price-now"><span>0</span>₽</div>
        </div>
    </main>
@endsection
