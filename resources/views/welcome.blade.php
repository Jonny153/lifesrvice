<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <title>LifeService</title>




</head>
<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">

    </header>

    <main role="main" class="">
        <img src="/img/logo600.png" class="img-fluid d-block mx-auto" alt="logo">
        <h1 class="my-5 display-4 text-white text-uppercase">Аварийный вызов сантехника</h1>
        <p class="mt-3 display-1"><a class="text-primary" href="tel:+78617651515">65-15-15</a></p>
        <p class="display-4"><a class="text-white" href="tel:+79887651515">+7-988-765-1515</a></p>
    </main>

    <footer class="mt-auto">
        <div class="inner">
            <p></p>
        </div>
    </footer>
</div>


<!-- Scripts -->

<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
