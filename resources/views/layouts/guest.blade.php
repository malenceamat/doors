<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Вход</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Custom Styles -->
        <link href="{{asset('/layouts/vertical-dark-menu/css/light/loader.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/layouts/vertical-dark-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('/layouts/vertical-dark-menu/loader.js')}}"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:400,600,700')}}" rel="stylesheet">
        <link href="{{asset('/src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('/layouts/vertical-dark-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/src/assets/css/light/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('/layouts/vertical-dark-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/src/assets/css/dark/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
