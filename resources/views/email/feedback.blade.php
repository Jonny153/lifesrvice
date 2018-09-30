<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Отзыв с сайта {{request()->root()}}</title>

<!-- Styles -->
        <style>

        </style>
    </head>
    <body>

        <p>Имя: {{ $data['name'] }}</p>

        <p>Телефон: {{ $data['phone'] }}</p>

        <p>Отзыв: {{ $data['comment'] }}</p>


    </body>
</html>
