@extends('layout')

@section('title', $current->title)

@section('content')
<div class="content">
    <section class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent justify-content-end">
                <li class="breadcrumb-item active" aria-current="page">{{$current->name}}</li>
                <li class="breadcrumb-item"><a href="/services/{{$current->category->slug}}">{{$current->category->name}}</a></li>
                <li class="breadcrumb-item"><a href="/services">Услуги</a></li>
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
            </ol>
        </nav>
    </section>

    <section>
        <div class="d-flex flex-column py-5">
            <h1 class="header align-self-center" data-aos="fade-left" >{{$current->title}}</h1>
        </div>
    </section>


    <section id="advantages" class="mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 p-2">

                </div>

                <div class="col-lg-9 p-2">
                    <p class="">{{$current->content}}</p>
                </div>
            </div>



        </div>
    </section>

    <section>
        <div class="d-flex flex-column py-5">
            <h2 class="header align-self-center" data-aos="fade-left">Все услуги</h2>
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

</div>

@endsection

@section('scripts')

@endsection