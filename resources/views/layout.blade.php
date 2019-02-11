<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="yandex-verification" content="98b92134968aa288" />

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <title>@yield('title') - LIFEСЕРВИС</title>


        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-5P6QMHB');</script>
        <!-- End Google Tag Manager -->


    </head>
    <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5P6QMHB"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-sm-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <img src="/img/logo.png" class="img-responsive main-logo" />
                </a>

                <div class="d-flex align-items-center">
                    <div class="tel-block">
                        {{--<i class="fas fa-mobile-alt text-white mr-3 animated tada infinite" style="animation-duration: 2.5s;"></i>--}}

                        <a class="tel mr-5 pb-1" href="tel:{{$contacts['phone']}}">
                            {{$contacts['phoneFormatted']}}
                        </a>
                    </div>

                    <a href="#" data-noscroll data-toggle="modal" data-target="#callModal" data-type="Верхнее меню"
                       class="btn btn-primary btn-pulse text-white text-uppercase font-weight-semibold d-none d-lg-block">
                        <span>Заказать звонок</span></a>

                </div>
            </div>
        </div>
        @yield('main-banner')

        <nav class="navbar navbar-dark navbar-expand-lg bg-gray">
            <div class="container">
                <a class="navbar-brand" href="/">@svg('home')</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Услуги
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($categories as $item)
                                    <a class="dropdown-item" href="/services/{{$item->slug}}">{{$item->name}}</a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Галерея работ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/feedback">Отзывы клиентов</a>
                        </li>

                    </ul>

                </div>
            </div>

        </nav>

        @yield('main-decor')

        @yield('content')

        @include('call-modal')

        <footer class="mt-5 bg-dark">
            <div class="py-3 tel-stripe">
                <div class="container">
                    <div class="tel-block text-center">
                        <a class="tel mx-2 mr-lg-5 float-lg-right text-nowrap" href="tel:{{$contacts['phone']}}">
                            @if(!empty($contacts['phoneShort'])){{$contacts['phoneShort']}}@else{{$contacts['phoneFormatted']}}@endif
                        </a>
                        @if(!empty($contacts['phone2']))
                        <a class="tel mx-2 mr-lg-5 float-lg-right text-nowrap" href="tel:{{$contacts['phone2']}}">
                            {{$contacts['phone2Formatted']}}
                        </a>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-4 py-2">
                        <nav class="nav h-100 main d-flex flex-column justify-content-around text-center">
                            <a class="nav-link" href="/">Главная</a>
                            <a class="nav-link" href="/services">Наши услуги</a>
                            <a class="nav-link" href="/gallery">Галерея работ</a>
                            <a class="nav-link" href="/feedback">Отзывы клиентов</a>
                            <a class="nav-link" href="/contacts">Контакты</a>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-4 py-2">
                        <nav class="nav flex-column  text-center">
                            @foreach($categories as $item)
                            <a class="nav-link" href="/services/{{$item->slug}}">{{$item->name}}</a>
                            @endforeach
                        </nav>
                    </div>

                    <div class="col-12 col-lg-4 d-flex">

                        <div class="align-self-end px-5 py-3">
                            <img src="/img/logo2.png" class="img-fluid d-block mx-auto" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
            <section class="bg-dark p-3 mt-4">
                <div class="container">
                    <p class="mb-0 text-primary">&copy;@php echo date('Y'); @endphp Компания «LIFEСЕРВИС» <a href="maito:{{$contacts['email']}}">{{$contacts['email']}}</a></p>
                </div>
            </section>
        </footer>



        <!-- Scripts -->

        <script src="{{ mix('/js/app.js') }}"></script>

        @yield('scripts')
        @include('counters')

    </body>
</html>
