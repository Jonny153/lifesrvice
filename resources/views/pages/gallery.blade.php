@extends('layout')

@section('title', 'Контакты')

@section('content')
<div class="content">

    <section class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent justify-content-end">

                <li class="breadcrumb-item active" aria-current="page">Галерея работ</li>
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
            </ol>
        </nav>
    </section>

    <section>
        <div class="d-flex flex-column py-5">
            <h1 class="header align-self-center" data-aos="fade-left" >Галерея выполненных работ</h1>
        </div>
    </section>




    <section class="container">

        <ul class="row gallery">
            <li>
                <img alt="Night away"  src="/img/gallery/130316a5ceaeb4678eb7666afe9e3eab.jpg">
            </li>
            <li>
                <img alt="Night away"  src="/img/gallery/cherno-belaia-vannaia2.jpg">
            </li>
            <li>
                <img alt="Night away"  src="/img/gallery/lavabo-victoriam-style-azzurra.jpg">
            </li>
            <li>
                <img alt="Night away"  src="/img/gallery/rozovaia_vannaia_komnata_foto_5.jpg">
            </li>
            <li>
                <img alt="Night away"  src="/img/gallery/516636266576fb80a07fda5.68030697.jpg">
            </li>
            <li>
                <img alt="Night away"  src="/img/gallery/Dizain-vannoi-komnaty-s-tualetom-2017-foto-44.jpg">
            </li>
            <li>
                <img alt="Night away"  src="/img/gallery/1618038772.jpg">
            </li>
            <li>
                <img alt="Night away"  src="/img/gallery/ea212a0cf9b7037522249958843a77ac.jpg">
            </li>

        </ul>


    </section>


</div>

@endsection

@section('scripts')

@endsection