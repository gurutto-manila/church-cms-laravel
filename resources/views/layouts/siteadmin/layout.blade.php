<html>

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ url(\Config::get('settings.favicon')) }}">
    <title>{{ \config::get('settings.sitetitle') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>

    <div id="app">
        <div class="border-b">
            @include('layouts.partials.navigation')
        </div>

        <div class="flex flex-col lg:flex-row md:flex-row min-h-full">
            @include('layouts.siteadmin.sidebar')
            <div class="w-full  px-5 py-3">
                <main class="admin-main">
                    @yield('content')

                </main>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')


    <script>
        $(document).ready(function() {
            $(".profile-click").click(function() {
                $(".user-dtl").toggle();
            });
        });
    </script>
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
            min-width: 254px;
            left: 1061px;
        }

    </style>


</body>


</html>
