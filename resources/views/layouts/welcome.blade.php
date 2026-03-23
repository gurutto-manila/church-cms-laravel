<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Additional Meta Contents Goes Here -->
    @yield('meta-contents')

    @include('layouts.partials._meta_data')
    @include('layouts.partials._favicon')
    @include('layouts.partials._analytics')
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Slab:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-300 font-main">
    <div id="app">
        @include('layouts.partials.home_navigation')
        <main class="">
            @yield('content')
        </main>
        @include('layouts.partials.home_footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6157065ad326717cb68441a8/1fgtv1l4v';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    @stack('wufoo-form')
    @stack('scripts')
    <style>
        .user-dtl {
            display: none;
            position: absolute;
            margin-top: 20px;
            z-index: 99;
            transform: translateY(-4px) scale(1.02);
            background: #fff;
            /* margin-left: -135px;*/
            box-shadow: 0px 5px 75px 2px rgba(64, 70, 74, 0.08) !important;
            /* min-width: 180px;*/
            min-width: 250px;
            right: 20px;
        }

    </style>
    <!--  @include('layouts.partials._tawk_chat') -->
</body>

</html>
