<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel - @yield('title')</title>

    <!-- Styles -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">



    <!-- Scripts -->
    <script>
        window.Laravel = <?= json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<nav class="ui top fixed menu">h
    <div class="ui container">
        <!-- Branding Image -->
        <a class="item" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
</nav>
<div class="ui container">
    @yield('content')
</div>


<!-- Scripts -->
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
