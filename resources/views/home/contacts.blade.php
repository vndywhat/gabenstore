@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <main>
        <div class="b-content__layout">
            <div class="b-content__container">
                <div class="b-breadcrumbs">
                    <a class="b-breadcrumbs__item" href="{{ route('home.index') }}">Главная</a>
                    <a class="b-breadcrumbs__item" href="{{ route('home.contacts') }}">Контакты</a>
                </div>
            </div>
            <div class="b-content__wrapper b-content__wrapper--md">
                <div class="b-content__container">
                    <div class="b-tipography">
                        <div class="b-column">
                            <div class="b-column__item b-column__item--large">
                                <h1 class="text-center-mobile">Контакты</h1>
                                <p>На этой странице находятся контакты для покупателей и партнёров. Пишите нам в любое
                                    время. Агенты техподдержки ответят на ваши вопросы в течение пяти минут, рекламный
                                    менеджер тоже быстрый, но не настолько.</p>
                            </div>
                        </div>
                        <div class="b-column">
                            <div class="b-column__item b-column__item--large">
                                <h2 class="text-center-mobile">Юридическая информация</h2>
                                <p>ООО «Гейбстор»</p>
                                <p>ИНН/КПП: 7842136365/784201001</p>
                                <p>ОГРН: 1177847196537</p>
                                <p>Юр. Адрес: 191025, город Санкт-Петербург, Невский пр-кт, дом 55, литер А, помещение
                                    3-Н, офис 330</p>
                            </div>
                        </div>
                        <div class="b-column">
                            <div class="b-column__item b-column__item--large">
                                <h2 class="text-center-mobile">сотрудничество</h2>
                                <p>Считаете, что нам стоит купить рекламу на вашей площадке? Хорошо! Пришлите на почту
                                    подробную статистику и стоимость размещения.</p>
                                <p>Вы независимый разработчик или издатель? Отлично! Мы можем разместить ваши игры в
                                    магазине. Пришлите на почту подробную информацию о своих продуктах. </p>
                                <p>Хотите предложить иное выгодное сотрудничество? Здорово! Опишите всё в деталях и
                                    отправляйте нам на почту.</p>
                            </div>
                            <div class="b-column__item b-column__item--small">
                                <p><a class="h4"
                                      href="/cdn-cgi/l/email-protection#7d101c0f16180914131a3d1a1c1f180e09120f18530f08"><span
                                            class="__cf_email__"
                                            data-cfemail="016c60736a6475686f66416660636472756e73642f7374">[email&nbsp;protected]</span></a>
                                </p>
                                <p>Только по вопросам сотрудничества</p>
                            </div>
                        </div>
                        <div class="b-column">
                            <div class="b-column__item b-column__item--large">
                                <h2 class="text-center-mobile">Возникли проблемы с купленным товаром?</h2>
                                <p>Что-то не так с ключом и активацией? Техподдержка работает круглосуточно и отвечает
                                    как по электронной почте, так и в группе ВКонтакте. Пишите, со всем разберёмся.
                                </p>
                            </div>
                            <div class="b-column__item b-column__item--small text-center-mobile">
                                <p><a class="h4"
                                      href="/cdn-cgi/l/email-protection#176462676778656357707675726463786572396562"><span
                                            class="__cf_email__"
                                            data-cfemail="0e5d5b5e5e415c5a4e494f4c4b5d5a415c4b205c5b">[email&nbsp;protected]</span></a>
                                </p>
                                <p>Только техподдержка</p>
                                <a href="https://vk.me/gabestore">
                                    <div class="btn btn--primary">Написать вконтакте</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
