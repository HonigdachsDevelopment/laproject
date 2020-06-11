<!DOCTYPE html>
<!-- double curly braces allows us to run a php command inside html-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Laravel</title>

<!-- Styles -->
<link href="{{ mix('css/fontimport.css') }}" rel="stylesheet" type="text/css">
<link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet" type="text/css">

<link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
<div id="app">

    @include('_includes.nav.topbarGeneric')

    <main>
        @yield('content')
    </main>

</div>


<!-- Scripts -->
<script src="{{ mix('js/manifest.js') }}" defer></script>
<script src="{{ mix('js/vendor.js') }}" defer></script>
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="{{ mix('js/scripts.js') }}" defer></script>

</body>
</html>
