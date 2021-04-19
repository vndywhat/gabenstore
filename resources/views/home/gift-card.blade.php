@extends('layouts.app')

@section('title', 'Подарочные карты')

@section('content')
    <main>
        <div class="b-content__layout">
            <div class="b-background"
                 style="
                    background-image: radial-gradient(67.05% 43.89% at 48.75% 46.84%, #4BA9FF 0%, #141111 100%);
                    background-repeat: no-repeat;
                 ">
            </div>
            <div class="b-content__container">
                <div class="b-content__container">
                    <div class="b-breadcrumbs">
                        <a class="b-breadcrumbs__item" href="{{ route('home.index') }}">Главная</a>
                        <a class="b-breadcrumbs__item" href="{{ route('home.gift-card') }}">Подарочные карты</a>
                    </div>
                </div>
                <div class="b-content__wrapper">
                    <div class="b-giftcards__title">
                        <div class="b-column">
                            <div class="b-column__item b-column__item--small b-tipography">
                                <h1>Подарочные карты Gabestore</h1>
                                <p>Хотите порадовать близкого человека крутым подарком, но не знаете что подарить? Для
                                    таких случаев мы предлагаем подарочные карты в различных номиналах. Ваши близкие
                                    будут очень довольны)</p>
                            </div>
                            <div class="b-column__item b-column__item--large">
                                <div class="b-giftcards__image">
                                    <img src="{{ asset('images/giftcards.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-center">Подарочные карты Gabestore</h2>
                    <div class="b-giftcards-list js-custom-scrollbar">
                        <div class="b-giftcards-list__item">
                            <div class="b-giftcards-list__item-image">
                                <img src="https://static.gabestore.ru/product/kTmiVpUocThsEO_x0qxQku-egnRNvpnH.svg"
                                     alt="" srcset="">
                            </div>
                            <a class="btn btn--primary js-addToCart " href="{{ route('basket.index') }}" data-item-id="2868">
                                В&nbsp;корзину
                            </a>
                        </div>
                        <div class="b-giftcards-list__item">
                            <div class="b-giftcards-list__item-image">
                                <img src="https://static.gabestore.ru/product/8hEuaTNC0VyKQIznzQfk9sBs4l3XnzKp.svg"
                                     alt="" srcset="">
                            </div>
                            <a class="btn btn--primary js-addToCart " href="{{ route('basket.index') }}" data-item-id="2869">
                                В&nbsp;корзину
                            </a>
                        </div>
                        <div class="b-giftcards-list__item">
                            <div class="b-giftcards-list__item-image"><img
                                    src="https://static.gabestore.ru/product/QDDjeyuJ1lv9BTV3QBNk9-1N3PglDKGg.svg"
                                    alt="" srcset=""></div>
                            <a class="btn btn--primary js-addToCart " href="{{ route('basket.index') }}"
                               data-item-id="2870">В&nbsp;корзину</a>
                        </div>
                        <div class="b-giftcards-list__item">
                            <div class="b-giftcards-list__item-image"><img
                                    src="https://static.gabestore.ru/product/-LT8khKTQD2k3qRC9ov3Mm6hesd-d7nF.svg"
                                    alt="" srcset=""></div>
                            <a class="btn btn--primary js-addToCart " href="{{ route('basket.index') }}"
                               data-item-id="2871">В&nbsp;корзину</a>
                        </div>
                        <div class="b-giftcards-list__item">
                            <div class="b-giftcards-list__item-image"><img
                                    src="https://static.gabestore.ru/product/2XXDUheuMPQOlm4cdsrL0-7jlDqThEyl.svg"
                                    alt="" srcset=""></div>
                            <a class="btn btn--primary js-addToCart " href="{{ route('basket.index') }}"
                               data-item-id="2872">В&nbsp;корзину</a>
                        </div>
                    </div>
                    <h2 class="text-center">как использовать подарочные карты?</h2>
                </div>
                <div class="b-content__wrapper b-content__wrapper--sm b-tipography--small">
                    <ol>
                        <li>Купите подарочную карту</li>
                        <li>После оплаты вы сможете увидеть номер подарочной карты</li>
                        <li>Вы сможете сгенерировать страничку поздравления, на которой будут размещены ваши пожелания,
                            а так же номер подарочной карты
                        </li>
                        <li>Для того, чтобы использовать подарочную карту, ваш друг должен в своем личном кабинете
                            активировать карту, номинал которой переконвертируется в бонусы, которыми можно оплатить
                            100% покупки
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </main>
@endsection
