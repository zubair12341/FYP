<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/all.min.css') }}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/style.css') }}">
      <title>@yield('title')</title>
</head>
<body>


    @include('includes.header') <!-- Include the header view -->


        @yield('content')


    @include('includes.footer') <!-- Include the footer view -->
</body>
</html>
