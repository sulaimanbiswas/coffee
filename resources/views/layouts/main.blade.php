<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 01 Coffee Shop Website</title>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>


    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="{{asset('template/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/footer.css')}}">
    @yield('css')

</head>
<body>
    
@include('layouts.header')

@yield('content')

@include('layouts.footer')
   
    <!-- Custom JS Link -->
    <script src="{{asset('template/js/index.js')}}"></script>
</body>
</html>