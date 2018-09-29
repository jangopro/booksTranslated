<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Books Translated') }}</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="">
        <div id="app">
        <h1 class="text-grey-darker text-center">
            {{ config('app.name', 'Books Translated') }}
        </h1>
            <div>
                @yield('content')
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
