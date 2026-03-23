<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Church Membership Pro') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- g-captcha -->
</head>

<body>
    <div id="app">
        <main>
            <div class="login-page flex items-center">
                @yield('content')
            </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    

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
    @stack('scripts')
    <style>
        .login-page {
            background: url('uploads/static/banner1.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            padding: 40px 0;
            position: relative;
        }

        .alert-success {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background: #def0d8;
            color: #445441;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .alert-warning {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background: #f8e8c1;
            border-color: #f4d899;
            color: #856e34;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        @media(max-width: 640px) {
            .login-page {
                padding: 15px;
            }
        }

    </style>
</body>

</html>
