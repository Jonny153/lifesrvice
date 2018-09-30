@extends('layout')

@section('title', 'Контакты')

@section('content')
<div class="content">

    <section class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent justify-content-end">

                <li class="breadcrumb-item active" aria-current="page">Отзывы клиентов</li>
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
            </ol>
        </nav>
    </section>

    <section>
        <div class="d-flex flex-column py-5">
            <h1 class="header align-self-center" data-aos="fade-left" >Отзывы клиентов</h1>
        </div>
    </section>




    <section class="container">

        @foreach ($comments as $comment)
        <div class="comment my-3 my-lg-5">
            <div class="description">
                <p>{{ $comment->comment }}</p>
            </div>
            <p class="text-right text-muted font-weight-bold mt-3">{{ $comment->name }}</p>
        </div>
        @endforeach

        <div class="text-center">
            {{ $comments->links() }}
        </div>

    </section>

    <section>
        <div class="d-flex flex-column py-5">
            <h2 class="header align-self-center" data-aos="fade-left" >Оставить отзыв</h2>
        </div>
    </section>

    <section class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">


                <form class="outline-secondary border" data-aos="fade-up" id="feedbackForm" action="" data-handler="/feedback" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body form-row">
                        <div class="col-md-6 mb-1 form-group">
                            <input type="text" class="form-control" name="name" placeholder="Ваше имя*">
                        </div>
                        <div class="col-md-6 mb-1 form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Телефон*">
                        </div>
                        <div class="col-md-12 mb-1 form-group">
                            <label>Отзыв*</label>
                            <textarea class="form-control" name="comment" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-dark m-2">Очистить</button>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>
        </div>

    </section>





</div>

@endsection

@section('scripts')

@endsection