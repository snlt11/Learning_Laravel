<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mine.css')}}">
    <title>@yield('title')</title>
  </head>
  <body>
    @include('layouts.nav')
    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script>
        @yield('scripts')
    </script>
  </body>
</html>
