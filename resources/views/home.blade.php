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
    </body>
</html>