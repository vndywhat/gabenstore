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
                <div class="b-cart b-cart--empty-cart">
                    <div class="h4">В&nbsp;вашей корзине еще ничего нет :(</div>
                    <a class="btn btn--primary" href="/catalog">
                        перейти в каталог
                    </a>
                </div>
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
