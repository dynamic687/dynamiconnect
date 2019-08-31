<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">

    <title>@yield('title' , 'Dynamiconnect')</title>

    <!-- Style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/resonsive.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/jquery.fileuploader.css') }}">

    @stack('css')
</head>
<body>
    
    @yield('content')

    <!-- Script --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery.fileuploader.js') }}"></script>
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    @stack('script')
</body>
</html>