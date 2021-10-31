<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Guest Home</title> --}}
    @yield('title')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
</head>
<body>
    <div class="header-top">
        @include('layouts.top-header')
    </div>

    <div class="header-menu">
        @include('layouts.bottom-header')
    </div>

    @yield('content')

    <div class="footer">
        @include('layouts.footer')
    </div>
    
</body>
</html>