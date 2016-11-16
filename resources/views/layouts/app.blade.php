<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <style type="text/css">
        html, body { height: 100%; margin: 0; padding: 0; }
        #map { height: 400px; }
    </style>


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'googleMapsKey' => 'AIzaSyDuMPzuJm8JsWsYR2hs-G90Dyhl3XIYQ0Q',
            'baseURL' => url('/')
        ]); ?>
    </script>
</head>
<body>

    @include('fragments.topbar')
    @include('fragments.messages')
    @yield('content')
    @include('fragments.scripts')
    @yield('scripts')

</body>
</html>
