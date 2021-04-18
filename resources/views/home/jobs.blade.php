@extends('layouts.app')

@section('title', 'Вакансии')

@section('content')
    <main>
        <div class="b-content__layout">
            <div class="b-content__container">
                <div class="b-breadcrumbs">
                    <a class="b-breadcrumbs__item" href="{{ route('home.index') }}">Главная</a>
                    <a class="b-breadcrumbs__item" href="{{ route('home.contacts') }}">Вакансии</a>
                </div>
            </div>
            <div class="b-content__wrapper b-content__wrapper--md">
                <div class="b-content__container">
                    <div class="b-tipography">
                        <div class="b-column">
                            <div class="b-column__item b-column__item--large">
                                <h1 class="text-center-mobile">Вакансии</h1>
                                <p>На этой странице будут находиться актуальные вакансии нашего магазина. На текущий момент открытых вакансий нет.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
