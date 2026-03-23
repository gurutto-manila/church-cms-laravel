<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Church Membership Pro') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Slab:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-300 font-main">
    <div id="app">
        @include('layouts.partials.navigation')
        <main class="">
            @yield('content')
        </main>
        @include('layouts.partials.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    {{-- <script>
        var botmanWidget = {
            frameEndpoint: '{{url("botman/chat")}}',
            introMessage: 'Welcome to our Church & Community website. How may we help you?',
            chatServer : '{{url("botman")}}', 
            timeFormat: 'HH:MM',
            dateTimeFormat: 'm/d/yy HH:MM',
            title: 'Church Bot',
            cookieValidInDays: 1,
            placeholderText: 'Send a message...',
            displayMessageTime: true,
            sendWidgetOpenedEvent: false,
            widgetOpenedEventData: '',
            mainColor: '#408591',
            headerTextColor: '#333',
            bubbleBackground: '#408591',
            bubbleAvatarUrl: '',
            desktopHeight: 450,
            desktopWidth: 370,
            mobileHeight: '100%',
            mobileWidth: '300px',
            videoHeight: 160,
            aboutLink: 'https://gegosoft.com/',
            aboutText: '⚡ Powered by Gegosoft',
        }; 
    </script> --}}
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
</body>

</html>
