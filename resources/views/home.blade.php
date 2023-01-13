<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            body{
                background-color: blueviolet;
                color: orange;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        $name = 'Giorgio'
        ?>
        <?php
        $surname = 'Guatta'
        ?>
        <?php
        $age = '20'
        ?>
        {{ 'hello word' }};
        <h1>CIAO, {{ $name }} {{$surname}}, hai {{$age}} anni.</h1>
        <div>
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com">GitHub</a>
        </div>
    </body>
</html>