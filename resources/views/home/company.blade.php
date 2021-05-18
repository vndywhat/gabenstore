@extends('layouts.app')

@section('title', 'О компании')

@section('content')
<main>
    <div class="b-content__layout">
        <div class="b-background b-background--image">
            <div class="b-background__image">
                <img
                    class="lazyload"
                     src="{{ \Illuminate\Support\Facades\Storage::url('image/IZYpOxX73vhbdFvXSzF6hY5bRHvYryyD.jpg') }}"
                    alt=""
                    srcset=""
                >
            </div>
        </div>
        <div class="b-content__container">
            <div class="b-content__container">
                <div class="b-breadcrumbs">
                    <a class="b-breadcrumbs__item" href="{{ route('home.index') }}">Главная</a>
                    <a class="b-breadcrumbs__item" href="{{ route('home.company') }}">О компании</a>
                </div>
            </div>
            <div class="b-about">
                <div class="b-content__wrapper b-content__wrapper--sm">
                    <div class="b-tipography--small">
                        <div class="b-about__title">
                            <div class="b-about__title-image">
                                <svg width="78" height="69" viewBox="0 0 78 69" fill="none"
                                     xmlns="/image/QWmSVjgJke-dKvz71eTlu4q39ZT_9iZF.jpg">
                                    <path
                                        d="M42.8221 48.5477C37.7967 43.5231 37.7967 35.3846 42.8221 30.36C47.8476 25.3354 55.9873 25.3354 61.0127 30.36C66.0381 35.3846 66.0381 43.5231 61.0127 48.5477H42.8221Z"
                                        fill="white"></path>
                                    <path
                                        d="M17.1289 48.5477C12.1034 43.5231 12.1034 35.3846 17.1289 30.36C22.1543 25.3354 30.294 25.3354 35.3194 30.36C40.3448 35.3846 40.3448 43.5231 35.3194 48.5477H17.1289Z"
                                        fill="white"></path>
                                    <path
                                        d="M72.9746 19.7446C69.6479 13.5877 64.9764 8.77538 59.0309 5.30769C53.0145 1.76923 46.3612 0 39 0C31.6388 0 24.9855 1.76923 19.0399 5.23692C13.0944 8.77538 8.42287 13.5877 5.09619 19.6738C1.69873 25.8308 0 32.7662 0 40.4092C0 45.7877 0.849365 50.9538 2.54809 55.8369C4.24682 60.72 6.65336 64.9662 9.7677 68.5754L39 66.8769V64.5415V60.5785V55.2H31.6388V60.9323L13.1652 61.9938C9.20145 56.5446 7.2196 48.5477 7.2196 40.6923C7.2196 34.4646 8.63521 28.8738 11.3956 23.92C14.1561 18.9662 17.9782 15.0738 22.7913 12.1723C27.6044 9.34154 32.9837 7.92615 39 7.92615C45.0163 7.92615 50.3956 9.34154 55.2795 12.1723C60.1633 15.0031 63.9147 18.9662 66.6751 23.92C69.3648 29.0154 70.7804 34.6769 70.7804 40.8338C70.7804 50.1754 67.8076 57.8892 61.7913 63.9754L66.9583 69C70.6388 65.6739 73.3993 61.4985 75.2396 56.6154C77.0799 51.7323 78 46.3538 78 40.48C78 32.7662 76.3013 25.8308 72.9746 19.7446Z"
                                        fill="white"></path>
                                    <path
                                        d="M26.1887 40.9755C27.6351 40.9755 28.8076 39.8031 28.8076 38.357C28.8076 36.9109 27.6351 35.7385 26.1887 35.7385C24.7424 35.7385 23.5699 36.9109 23.5699 38.357C23.5699 39.8031 24.7424 40.9755 26.1887 40.9755Z"
                                        fill="black"></path>
                                    <path
                                        d="M52.3775 40.9755C53.8239 40.9755 54.9964 39.8031 54.9964 38.357C54.9964 36.9109 53.8239 35.7385 52.3775 35.7385C50.9311 35.7385 49.7586 36.9109 49.7586 38.357C49.7586 39.8031 50.9311 40.9755 52.3775 40.9755Z"
                                        fill="black"></path>
                                </svg>
                            </div>
                            <h1>gabestore – больше, чем один человек</h1>
                            <p class="b-tipography__subtitle">GabeStore был основан в 2014 году как незатейливый сайт с
                                рандомными ключами, и только в 2016 мы выросли в серьёзный, интересный магазин.</p>
                        </div>
                    </div>
                </div>
                <div class="b-content__wrapper b-content__wrapper--md">
                    <div class="b-about-grid">
                        <div class="b-about-grid__item">
                            <div class="b-about-grid__item-text">Нам скучно быть просто магазином игр, поэтому мы любим
                                вылезать за рамки: рисуем комиксы, пишем статьи, составляем тесты, проводим конкурсы,
                                даже разработали несколько текстовых квестов.
                            </div>
                            <div class="b-about-grid__item-image">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/U7AHP_b9lpiTM7BpYGro3ugGpPX--7V8.jpg') }}">
                            </div>
                        </div>
                        <div class="b-about-grid__item">
                            <div class="b-about-grid__item-text">Мы никогда не пытаемся дистанцироваться от покупателей.
                                Никаких ботов в поддержке, никаких проигнорированных комментариев на сайте или в группе,
                                никаких пряток, если напортачили. Для нас очень важно сохранять прямой и честный диалог
                                с клиентами.
                            </div>
                            <div class="b-about-grid__item-image">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/FdJTY0z3Xzpw8KkSTKJgmjz26oDtih1F.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="b-about-advantages">
                        <div class="b-about-advantages__item">
                            <div class="b-about-advantages__item-icon">
                                <img src="/images/Gabestore_icons_otkrytost'.png">
                            </div>
                            <div class="b-about-advantages__item-title">На одной волне</div>
                            <div class="b-about-advantages__item-text">Мы сами геймеры, так что продавать игры для нас
                                не только бизнес, но и большое удовольствие.
                            </div>
                        </div>
                        <div class="b-about-advantages__item">
                            <div class="b-about-advantages__item-icon">
                                <img src="/images/Gabestore_icons_nizkoe_piratstvo.png">
                            </div>
                            <div class="b-about-advantages__item-title">Пиратству — бой!</div>
                            <div class="b-about-advantages__item-text">Чем выше наши скидки, тем меньше в Интернете
                                пиратов. По крайней мере мы очень на это надеемся.
                            </div>
                        </div>
                        <div class="b-about-advantages__item">
                            <div class="b-about-advantages__item-icon">
                                <img src="/images/Gabestore_icons_legal'nye_kluchi.png">
                            </div>
                            <div class="b-about-advantages__item-title">Никаких компромиссов</div>
                            <div class="b-about-advantages__item-text">Не торгуем серыми ключами и, упаси боже,
                                аккаунтами. Дело не законопослушности, а в принципах.
                            </div>
                        </div>
                        <div class="b-about-advantages__item">
                            <div class="b-about-advantages__item-icon">
                                <img src="/images/Gabestore_icons_love.png">
                            </div>
                            <div class="b-about-advantages__item-title">Любимая работа</div>
                            <div class="b-about-advantages__item-text">У нас нет секрета успеха, нам просто в кайф
                                заниматься тем, чем мы занимаемся и развиваться так, как развиваемся.
                            </div>
                        </div>
                        <div class="b-about-advantages__item">
                            <div class="b-about-advantages__item-icon">
                                <img src="/images/Gabestore_icons_max_skidki.png">
                            </div>
                            <div class="b-about-advantages__item-title">Всем нужны скидки</div>
                            <div class="b-about-advantages__item-text">Что-то появится, что-то пропадёт, но скидки,
                                скидки никогда не поменяются. Ну, в смысле, не пропадут из магазина, так-то они всегда
                                разные.
                            </div>
                        </div>
                    </div>
                    <div class="b-about-grid">
                        <div class="b-about-grid__item">
                            <div class="b-about-grid__item-text">Как-то раз мы заказали крупную партию игр у
                                “Софтклаба”, просто огромную, на несколько тысяч ключей!... И все они пришли в
                                физических изданиях, мы несколько дней разгружали и сортировали свыше тонны дисков под
                                дождем. Было весело.
                            </div>
                            <div class="b-about-grid__item-image">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/Pi3Lvuv1FPICyVShobxz9nVvELIuPoqU.jpeg') }}">
                            </div>
                        </div>
                        <div class="b-about-grid__item">
                            <div class="b-about-grid__item-text">Мы не всегда отсиживаемся в интернете, вы могли
                                повстречаться с нашей лавкой или нашими сотрудниками на множестве крупных фестивалей: VK
                                Fest, Старкон, GamePlanet.
                            </div>
                            <div class="b-about-grid__item-image">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/uVHjcS8GbyappHQgQLWgPUTXVXpkzBBE.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-content__wrapper b-content__wrapper--md">
                    <h2 class="text-center">О Gabestore в цифрах</h2>
                    <div class="b-about-numbers">
                        <div class="b-about-numbers__item">
                            <div class="b-about-numbers__item-title">33</div>
                            <div class="b-about-numbers__item-text">Года самому взрослому сотруднику компании. Это наш
                                главный бухгалтер Аня.
                            </div>
                        </div>
                        <div class="b-about-numbers__item">
                            <div class="b-about-numbers__item-title">1 500</div>
                            <div class="b-about-numbers__item-text">Среднее число ключей, которое продается в нашем
                                магазине за сутки
                            </div>
                        </div>
                        <div class="b-about-numbers__item">
                            <div class="b-about-numbers__item-title">5 000</div>
                            <div class="b-about-numbers__item-text">Ключей Metro: Exodus мы распродали за два дня. Это
                                наш личный рекорд
                            </div>
                        </div>
                        <div class="b-about-numbers__item">
                            <div class="b-about-numbers__item-title">4 000</div>
                            <div class="b-about-numbers__item-text">Часов (а уже и больше) наигранно у нашего главы
                                техподдержки в Dota2
                            </div>
                        </div>
                    </div>
                    <div class="b-about-grid">
                        <div class="b-about-grid__item">
                            <div class="b-about-grid__item-text">Как-то раз мы ездили основным составом на шашлыки и
                                выяснили, что самый интересный и простой маринад — это полить мясо хорошей минералкой,
                                вроде “Нарзана”, порубить в него зелени с чесноком и подсолить. Всё, никакого уксуса,
                                никакого майонеза, подержать пару часов в кастрюльке.
                            </div>
                            <div class="b-about-grid__item-image">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/_dAq6edui-iHtWLhdc5OyVeqHwVgABjG.jpg') }}">
                            </div>
                        </div>
                        <div class="b-about-grid__item">
                            <div class="b-about-grid__item-text">В основном мы все проживаем в Санкт-Петербурге, но есть
                                сотрудники из Смоленска, Великого Новгорода, Москвы и даже Украины.
                            </div>
                            <div class="b-about-grid__item-image">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/INSGZrjrpF62DkzQyIepETLU8-4dHidP.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-content__wrapper b-content__wrapper--md">
                    <div class="b-tipography b-tipography--small b-tipography--halfmb">
                        <h2 class="text-center">И еще несколько интересных фактов о нас</h2>
                    </div>
                    <div class="b-about-facts">
                        <div class="b-about-facts__item">
                            <div class="b-about-facts__item-title">01</div>
                            <div class="b-about-facts__item-text">За всё время мы глобально меняли дизайн сайта три
                                раза. Первый раз в 2014, тогда страшненькая лавка с рандомом стала походить на магазин,
                                второй раз в 2016, с ним мы нашли наши брендовые цвета и начали захватывать прероллы на
                                YouTube, и вот в этом, 2020-ом, году решили уйти в стильный, модный, современный,
                                глазастый минимализм.
                            </div>
                        </div>
                        <div class="b-about-facts__item">
                            <div class="b-about-facts__item-title">02</div>
                            <div class="b-about-facts__item-text">Название нашего магазина абсолютно точно,
                                гарантированно, 100%, безусловно не имеет никакого отношения к личности известного в
                                индустрии игрового продюсера Гейба Ньюэлла. Имя Гейб символизирует склонность к
                                непрерывному движению, тяготеет к Меркурию с Ураном и ему отлично подходит Жёлтый с
                                Оранжевым. Идеальный выбор для нас.
                            </div>
                        </div>
                    </div>
                    <div class="b-about-facts">
                        <div class="b-about-facts__item">
                            <div class="b-about-facts__item-title">03</div>
                            <div class="b-about-facts__item-text"> Нашим ценам мало быть самыми выгодными и низкими, мы,
                                вдобавок, ещё и сами оплачиваем всю комиссию за покупателей, чтобы, в процессе
                                оформления заказа, к стоимости не прибавлялись никакие дополнительные суммы.
                            </div>
                        </div>
                        <div class="b-about-facts__item">
                            <div class="b-about-facts__item-title">04</div>
                            <div class="b-about-facts__item-text"> Знаете, почему у нас, в отличие от некоторых
                                конкурентов, нет никаких счётчиков на скидках? Потому что это манипуляции вашими
                                желаниями. Мы честно отвечаем — никогда нельзя заранее знать, когда цена изменится. Мы
                                держим максимальные скидки так долго, как это вообще возможно.
                            </div>
                        </div>
                    </div>
                    <div class="b-about-facts">
                        <div class="b-about-facts__item">
                            <div class="b-about-facts__item-title">05</div>
                            <div class="b-about-facts__item-text">Когда-то у нас была бонусная программа с кэшбеком и
                                регулярные промокоды в группе, но мы от этого избавились. Из-за жадности? Нет, просто мы
                                и так всегда продаём игры по самым низким из возможных в легальной дистрибуции ценам, и
                                любые дополнительные скидки продавали бы товар в минус.
                            </div>
                        </div>
                        <div class="b-about-facts__item">
                            <div class="b-about-facts__item-title">06</div>
                            <div class="b-about-facts__item-text">Одной из самых важных перемен в последнем обновлении
                                сайта мы считаем не продвинутый личный кабинет, не появление блога, даже не новый
                                глазастый логотип, а окончательно избавление от рандома. Всё, мы это переросли.
                            </div>
                        </div>
                    </div>
                    <div class="b-about-slider">
                        <div class="b-about-slider__title">
                            <div class="h4">и напоследок</div>
                            <div class="b-about-slider__arrows">
                                <div class="b-control b-control--horizontal">
                                    <div class="b-control__btn b-control__btn--up js-slider-about-prev"></div>
                                    <div class="b-control__btn b-control__btn--down js-slider-about-next"></div>
                                </div>
                            </div>
                        </div>
                        <div class="b-about-slider__wrapper js-slider-about">
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/Xj1-OB33okHermywubySnP64aIqKbItq.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/0wVvAkCTnReZFdJw9JnHzx44H83_sjoc.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/nlBbWYd-PG72B0Pi6b1ZRF6Tsk90VZiU.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/2-kA2usvrW7MXHuab3rVwrkysVBxOawe.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/GORyJAZkcr7QMwsMgESHZIecRlb4PdMc.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/6_5GThxp_QiH5F0hQMCKenVwF5bF6bK7.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/LXSSNjg3iaCcRRvsBS8NauXveNYGp8rw.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/tF9Na7ZWNOMyLkuhX2wfnulccKtISV-2.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/RX0AsYepyl_oKhfoXRUuQI6djFCdrvlT.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/3M5-3D9PWFzfl5CID0T8zRx7VZLTiXvE.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/hbFZode3uzZfuC2hWd45np7ZVfKkh8HT.jpg') }}" alt="">
                            </div>
                            <div class="b-about-slider-item">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url('image/Iw2t40ZA5c7qfBuTfmiB8kErU6zfBsZg.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
