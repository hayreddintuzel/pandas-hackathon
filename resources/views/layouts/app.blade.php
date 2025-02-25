<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Estimation Search Engine</title>
    
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>
<body class="pb-5">
    @yield('content')
    <footer class="border-top text-center py-3 fixed-bottom bg-white">
        Made with <i class="fas fa-heart" style="color: red"></i> by <b>Heavy Metal Pandas</b> <img src="{{ asset('panda.png') }}">
    </footer>
    <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
</body>
</html>
