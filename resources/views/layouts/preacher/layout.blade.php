<html>

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ url(\Config::get('settings.favicon')) }}">
    <title>{{ \config::get('settings.sitetitle') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">

</head>

<body>

    <div id="app">
        <div class="border-b">
            @include('layouts.preacher.navigation')
        </div>

        <div class="flex flex-col lg:flex-row md:flex-row h-full bg-gray-100">
            @include('layouts.preacher.sidebar')
            <div class="w-full  px-5 py-3">
                <main class="admin-main">
                    @yield('content')

                </main>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @stack('scripts')
</body>


</html>
