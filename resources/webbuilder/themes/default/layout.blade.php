<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('theme::_seo_meta')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
</head>
<body class="bg-gray-50 text-gray-800">

    @include('theme::_nav_bar')

    <main>
        @yield('content')
    </main>

    @include('theme::_footer')

    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
