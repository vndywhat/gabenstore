<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#141111" />
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('images/favicon/white/apple-touch-icon.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{ asset('images/favicon/white/favicon-32x32.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset('images/favicon/white/favicon-16x16.png') }}"
    />
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}" />
    <link rel="mask-icon" href="{{ asset('images/favicon/white/safari-pinned-tab.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon/white/favicon.ico') }}" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta
        name="msapplication-config"
        content="{{ asset('images/favicon/browserconfig.xml') }}"
    />
    <meta name="theme-color" content="#ffffff" />
    <meta
        name="description"
        content="Интернет-магазин GabeStore — компьютерные игры со скидками до 95%! Всегда низкие цены, круглосуточная поддержка и моментальная доставка ключей."
    />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <title>@yield('title', 'GabeStore — магазин игр на ПК')</title>
</head>

<body>

    <a class="fixed-cart js-cart-icon" href="/basket"></a>

    @include('layouts.partials.header')

    <script type="text/javascript">
        window.tConfig = {};
        window.tConfig.slides = [
            "/images/slider/custom – 1.jpg",
            "/images/slider/borderlands3.jpg",
            "/images/slider/custom – 2.jpg",
            "/images/slider/custom – 3.jpg",
            "/images/slider/custom – 4.jpg",
            "/images/slider/custom – 5.jpg",
        ];
    </script>

    @yield('content')

    @include('layouts.partials.footer')

    <div class="b-scroll-top js-scroll-top">
        <button class="b-scroll-top__btn" type="button"></button>
    </div>
    <div class="cookie-notify js-cookie">
        <div class="cookie-notify__text">
            Расслабляйтесь, гуляйте по&nbsp;сайту, а&nbsp;за куками&nbsp;мы
            присмотрим! Как? Читайте в
            <a href="/documents/agreement" target="_blank">пользовательском соглашении.</a>
        </div>
        <div class="cookie-notify__close js-close-cookie"></div>
    </div>

    <script src="{{ asset('assets/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/vendor.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bundle.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            function openLogin() {
                $(".js-modal-open").eq(1).click();
            }
            $(document).on("click", "#login", function () {
                openLogin();
            });
        });
    </script>
</body>
</html>
