@extends('layouts.app')

@section('title', 'Правовая информация')

@section('content')
    <main>
        <div class="b-content__layout">
            <div class="b-content__container">
                <div class="b-content__container">
                    <div class="b-breadcrumbs">
                        <a class="b-breadcrumbs__item" href="{{ route('home.index') }}">Главная</a>
                        <a class="b-breadcrumbs__item" href="{{ route('document.index') }}">Правовая информация</a>
                    </div>
                </div>
                <div class="b-content__wrapper b-content__wrapper--md">
                    <div class="b-tipography">
                        <div class="b-column">
                            <div class="b-column__item b-column__item--large">
                                <h1 class="text-center-mobile">Правовая информация</h1>
                                <p>На этой странице находятся все документы, необходимые покупателям и пользователям нашего сайта. Никаких пряток, ведь мы стремимся выстраивать максимально доверительные и честные отношения. Конечно, правовые документы читать тяжело, но очень занятно.</p>
                                <ul class="b-tipography__group">
                                    <li>
                                        <a href="{{ route('document.agreement') }}">
                                            Пользовательское соглашение
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('document.privacy') }}">
                                            Политика конфиденциальности
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('document.offer') }}">
                                            Лицензионный договор-оферта
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('document.services') }}">
                                            Договор-оферта оказания услуг
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> </main>
@endsection
