<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('asset/fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css')}}">     
        <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.css')}}">       
        <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.css')}}">       
        <link rel="stylesheet" href="{{ asset('asset/css/main.css')}}">   
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">    
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>
    </head>
    <body>
        <div id="app">
            <main-app></main-app>
        </div>

        <!-- Vue js call -->
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

        {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
        <script src="{{ asset('asset/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ asset('asset/js/owl.carousel.js')}}"></script>
        <script src="{{ asset('asset/js/vendor/bootstrap.js')}}"></script>
        <script src="{{ asset('asset/js/counterup/waypoints.min.js')}}"></script>
        <script src="{{ asset('asset/js/counterup/jquery.counterup.js')}}"></script>
        <script src="{{ asset('asset/js/main.js')}}"></script>
    </body>
</html>
