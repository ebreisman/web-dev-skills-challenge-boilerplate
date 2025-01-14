<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web dev skills challenge boilerplate</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        @include('mapbox-css')
    </head>
    <body>
        <main id="app">
            <example-component></example-component>
        </main>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
