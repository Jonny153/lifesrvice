@extends('layout')

@section('title', 'Аварийно-монтажная компания')

@section('main-banner')
    <section id="heading">
        <picture>
            <source srcset="/img/xl/top.jpg" media="(min-width: 1400px)">
            <source srcset="/img/lg/top.jpg" media="(min-width: 769px)">
            <img srcset="/img/sm/top.jpg" alt="responsive image" class="d-block img-fluid">
        </picture>
        <div class="capture">
            <div class="container d-flex flex-column justify-content-center h-100">
                <h1 class="text-uppercase font-weight-bold ml-4" data-aos="zoom-out-right"><span class="text-primary">Аварийно</span>-монтажная <br>компания</h1>
            </div>
        </div>
    </section>
@endsection

@section('main-decor')
    <div class="container top-img-container">
        <picture>
            <img srcset="/img/chel.png" data-aos="zoom-out-left" alt="монтажник" class="d-none d-lg-block img-fluid top-img">
        </picture>
    </div>
    <div class="left-img-container">
        <picture>
            <img srcset="/img/left-img.png"  alt="монтажник" class="d-none d-xl-block img-fluid left-img">
        </picture>
    </div>
@endsection

@section('content')



    <div class="content">
    <section id="emergency" class="mt-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="500">
                    <div class="emergency bg-dark shadow p-3 mx-3 my-2 my-lg-5">
                        <p class="text-white font-weight-bold">Специалисты компании LifeСЕРВИС устранят любую аварию
                            водопровода, отопления или канализации в кратчайшие сроки. Звоните 65-15-15</p>
                        <a href="#" data-noscroll data-toggle="modal" data-target="#callModal" data-type=""
                           class="btn btn-primary btn-pulse text-white text-uppercase font-weight-semibold px-4">
                            <span>Заказать звонок</span></a>
                    </div>
                </div>
                <div class="col-lg-2 text-center" data-aos="zoom-in" data-aos-delay="700">
                    @svg('24-hours', 'svg-big text-shadow my-5')
                </div>
            </div>
        </div>


        <div class="d-flex flex-column py-5">
            <h2 class="header align-self-center" data-aos="fade-left">Услуги</h2>
        </div>



    </section>


    <section id="services" class="mt-3 pt-5">
        <div class="container my-5">
            <div class="row">

                @foreach($categories as $item)

                <div class="col-12 col-sm-6 col-lg-3 px-2 mh-100 service-block-container mb-5" data-aos="slide-up" data-aos-delay="{{($loop->index*250)%1000}}">
                    <div class="service-block h-100 text-center">
                        <div class="py-3">
                            <a class="service-header-link" href="/services/{{$item->slug}}">
                                @svg($item->slug, 'svg-medium')
                                <h2 class="service-header">{{$item->name}}</h2>
                            </a>
                        </div>
                        <div class="list-group">
                            @foreach($item->services as $service)
                            <a href="/services/{{$item->slug}}/{{$service->slug}}" class="list-group-item list-group-item-action">{{$service->name}}</a>
                            @endforeach
                        </div>

                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>

    <section id="about">

        <div class="d-flex flex-column py-5 my-4">
            <h2 class="header align-self-center" data-aos="fade-left" >О компании</h2>
        </div>
        <div class="container">


                <p>Наши услуги выполняются с соблюдением всех технологических норм,
                    а опыт и знания вложенные в работу гарантируют качество! Доверие наших клиентов цель номер один.
                    Производим монтаж cантехнического оборудования любой сложности: раковин, унитазов, душевых кабин,
                    ванных, водонагревательных баков, водо-накопительных баков,тёплых полов, бойлера, замена сифона
                    и обвязки, радиаторов отопления , канализационного стояка, трубопровода горячего и холодного
                    водоснабжения, разводка точек по помещению , подключение стиральных и посудомоечных машин,
                    котлов АГВ, установка смесителя , шарового крана , гибкой подводки, счетчиков воды, фильтров
                    для воды от простых до многоступенчатых. Замена сливного бочка или его запорной арматуры.</p>


        </div>
    </section>



    <section id="advantages" class="mt-5">



        <div class="d-flex flex-column py-5 my-4">
            <h2 class="header align-self-center" data-aos="fade-left" >Наши преимущества</h2>
        </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-4 p-2">
                        <div class="adv-icon-container" data-tilt>
                            <picture>
                                <img srcset="/img/edv-bg1.png" class="d-block img-fluid mx-auto">
                            </picture>
                            <div class="adv-icon-bg">
                                <picture>
                                    <img srcset="/img/edv-bg2.png" class="d-block img-fluid mx-auto">
                                </picture>
                                <div class="adv-icon d-flex flex-column justify-content-center">
                                    @svg('calendar', 'svg-medium text-white')
                                </div>
                            </div>

                        </div>
                        <h4 class="text-uppercase text-center my-3 my-lg-5">ежедневно</h4>
                        <p class="text-center">Ремонт не может ждать, поэтому мы работаем 7 дней в неделю.</p>
                    </div>

                    <div class="col-6 col-lg-4 p-2">
                        <div class="adv-icon-container" data-tilt>
                            <picture>
                                <img srcset="/img/edv-bg1.png" class="d-block img-fluid mx-auto">
                            </picture>
                            <div class="adv-icon-bg">
                                <picture>
                                    <img srcset="/img/edv-bg2.png" class="d-block img-fluid mx-auto">
                                </picture>
                                <div class="adv-icon d-flex flex-column justify-content-center">
                                    @svg('medal', 'svg-medium text-white')
                                </div>
                            </div>

                        </div>
                        <h4 class="text-uppercase text-center  my-3 my-lg-5">качественно</h4>
                        <p class="text-center">Мы предлагаем качественное исполнение сантехнических работ и даем гарантию годовую гарантию на наши услуги.</p>
                    </div>

                    <div class="col-6 col-lg-4 p-2">
                        <div class="adv-icon-container" data-tilt>
                            <picture>
                                <img srcset="/img/edv-bg1.png" class="d-block img-fluid mx-auto">
                            </picture>
                            <div class="adv-icon-bg">
                                <picture>
                                    <img srcset="/img/edv-bg2.png" class="d-block img-fluid mx-auto">
                                </picture>
                                <div class="adv-icon d-flex flex-column justify-content-center">
                                    @svg('wallet', 'svg-medium text-white')
                                </div>
                            </div>

                        </div>
                        <h4 class="text-uppercase text-center  my-3 my-lg-5">с нами выгодно</h4>
                        <p class="text-center">Рубль падает, а наши цены не меняются. С каждым днем наши услуги для Вас все выгоднее и выгоднее.</p>
                    </div>


                </div>


            </div>
            <div class="text-center w-100">
                <a class="btn btn-dark btn-pulse text-uppercase font-weight-semibold my-5 px-4" href="#"  data-aos="flip-up" data-toggle="modal" data-target="#callModal" data-type="Главная - наши преимущества" >Заказать звонок</a>
            </div>

    </section>



    <section id="equipment" class="mt-5">
        <div class="d-flex flex-column py-5 my-4">
            <h2 class="header header-inv text-white align-self-center" data-aos="fade-left" >Оборудование</h2>
        </div>

        <div class="container">
            <p class="text-white">Текст про то как важно использовать крутое оборудование при устранении засоров и способы прочистки. Текст про то как важно использовать крутое оборудование при устранении засоров и способы прочисткиТекст про то как важно использовать крутое оборудование при устранении засоров и способы прочисткиТекст про то как важно использовать крутое оборудование при устранении засоров и способы прочисткиТекст про то как важно использовать крутое оборудование при устранении засоров и способы прочисткиТекст про то как важно использовать крутое оборудование при устранении засоров и способы прочисткиТекст про то как важно использовать крутое оборудование при устранении засоров и способы прочистки</p>

            <div class="row justify-content-center">
                <div class="col-6 col-lg-4 p-2"  data-aos="slide-up">

                    <picture>
                        <img srcset="/img/equip-1.png" class="d-block img-fluid mx-auto">
                    </picture>

                    <h4 class="text-uppercase text-white text-center  my-3 my-lg-5">механическая прочистка</h4>
                    <p class="text-center text-white">Краткое описание оборудования и преимущества его использования при определенном типе засоров</p>
                </div>

                <div class="col-6 col-lg-4 p-2" data-aos="slide-up" data-aos-delay="250">

                    <picture>
                        <img srcset="/img/equip-2.png" class="d-block img-fluid mx-auto">
                    </picture>

                    <h4 class="text-uppercase text-white text-center  my-3 my-lg-5">гидродинамическая прочистка</h4>
                    <p class="text-center text-white">Краткое описание оборудования и преимущества его использования при определенном типе засоров</p>
                </div>

                <div class="col-6 col-lg-4 p-2" data-aos="slide-up" data-aos-delay="500">

                    <picture>
                        <img srcset="/img/equip-3.png" class="d-block img-fluid mx-auto">
                    </picture>

                    <h4 class="text-uppercase text-white text-center  my-3 my-lg-5">пневматическая прочистка</h4>
                    <p class="text-center text-white">Краткое описание оборудования и преимущества его использования при определенном типе засоров</p>
                </div>


            </div>

            <div class="text-center w-100">
                <a class="btn btn-light btn-pulse text-uppercase font-weight-semibold my-5 px-4" href="#"
                   data-aos="flip-up" data-toggle="modal" data-target="#callModal" data-type="Главная - наши преимущества" >Заказать звонок</a>
            </div>


        </div>

    </section>




    <section id="advice" class="mt-5">

        <div class="d-flex flex-column py-5 my-4">
            <h2 class="header align-self-center" data-aos="fade-left" >Отзывы клиентов</h2>
        </div>

        <div class="container">


            <div id="carousel" class="carousel slide my-4" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($comments as $comment)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <div class="h-100 d-flex flex-column justify-content-center px-5">
                            <blockquote class="blockquote text-center">
                                <p>{{ $comment->comment }}</p>
                                <p class="blockquote-footer">{{ $comment->name }}</p>
                            </blockquote>
                        </div>

                    </div>
                    @endforeach


                </div>
                <a class="carousel-control-prev justify-content-start" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next justify-content-end" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="text-center w-100">
                <a class="btn btn-primary btn-pulse text-dark text-uppercase font-weight-semibold my-5 px-4" href="#"
                   data-aos="flip-up" data-toggle="modal" data-target="#feedbackModal">Оставить отзыв</a>
            </div>
        </div>
    </section>

</div>

    @include('feedback-modal')

@endsection


@section('scripts')

@endsection