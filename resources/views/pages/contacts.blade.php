@extends('layout')

@section('title', 'Контакты')

@section('content')
<div class="content">

    <section class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent justify-content-end">

                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
            </ol>
        </nav>
    </section>

    <section>
        <div class="d-flex flex-column py-5">
            <h1 class="header align-self-center" data-aos="fade-left" >Контакты</h1>
        </div>
    </section>

    <section class="container">

        <div class="row my-5">

            <div class="col-12 col-lg-4 p-5 d-flex flex-column justify-content-center" data-aos="zoom-in-right">
                <p class="lead">
                    @svg('mobile-alt', 'svg-15 mr-3 animated tada infinite', ['style' => 'animation-duration: 2.5s'])
                    <a class="tel tel-black mr-5" href="tel:{{$contacts['phone']}}">{{$contacts['phoneShort']}}</a>
                </p>
                <p class="lead">
                    @svg('mobile-alt', 'svg-15 mr-3 animated tada infinite', ['style' => 'animation-duration: 2.5s'])
                    <a class="tel tel-black mr-5" href="tel:{{$contacts['phone2']}}">{{$contacts['phone2Formatted']}}</a>
                </p>
                <p class="lead">
                    @svg('map-marker-alt', 'mr-3')
                    г. Новороссийск
                </p>
            </div>
            <div class="col-12 col-lg-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://yandex.ru/map-widget/v1/?um=constructor%3A4dc045858e0b593e2b9536dcd4e2146076806d9e1037634990c90f43a3abf8cf&amp;source=constructor" frameborder="0"></iframe>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <div class="m-3">
                    <p class="lead text-center">Если у вас остались вопросы, заполните форму ниже и наш специалист свяжется с вами в ближайшее время</p>
                </div>

                <form class="outline-secondary border" data-aos="fade-up" id="callForm" action="" data-handler="/call" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="type" value="Страница контактов">

                    <div class="form-row p-2">
                        <div class="col-md-6 mb-2 form-group">
                            <input type="text" class="form-control" name="person" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6 mb-2 form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Телефон*">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="reset" class="btn btn-dark m-2">Очистить</button>
                        <button type="submit" class="btn btn-primary m-2">Отправить</button>
                    </div>
                </form>
            </div>
        </div>



    </section>
</div>

@endsection

@section('scripts')

@endsection