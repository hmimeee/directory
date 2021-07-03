
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>World Best Local Directory Website template</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAV ICON(BROWSER TAB ICON) -->
        <link rel="shortcut icon" href="{{ asset('images/fav.ico') }}" type="image/x-icon">
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
        <!-- FONTAWESOME ICONS -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- ALL CSS FILES -->
        <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        @stack('style')
    </head>

    <body>
        <!--PRE LOADING-->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        @include('frontend.default.includes.header')

        <main>
            @yield('content')
        </main>

        @include('frontend.default.includes.footer')

        <!--QUOTS POPUP-->
        @stack('modal')
        <!--SCRIPT FILES-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/materialize.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        @stack('script')
    </body>
</html>
