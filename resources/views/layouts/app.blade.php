<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css')}}">
</head>
<body>

    <section class="container py-5">
        @yield('content');
    </section>


    


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
</body>
</html>