<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Pusher Key, for bootstrap.js consumption -->
    <meta name="user-name" content="{{ optional(auth()->user())->name }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            margin-top: 70px;
        }

        input[type=submit]:hover,
        button:hover {
            cursor: pointer;
        }

        @yield('style')
    </style>
</head>
<body>
    <div id='app' class='container'>
        @include('layouts.nav')
        <div class='row'>
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        @yield('javascript')
    </script>
</body>
</html>