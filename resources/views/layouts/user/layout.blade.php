<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<body class="antialiased font-sans bg-grey-light">
    <div id="app" class="wrapper flex flex-col min-h-screen">
        <div class="main flex-1">
            <div class="main-wrapper shadow-inner">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<style>
    .main-wrapper {
        min-height: 100vh;
        padding: 50px 0;
        position: relative;
    }

    .text-danger {
        color: red;
    }

</style>

</html>
