<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" ></script>
    <title>Laravel-Movies</title>
  </head>
  <body>
    <header class="w-100">
      @include('header')
    </header>
    <main class="w-100 px-5 py-4 bg-light">
      @yield('content')
    </main>
  </body>
</html>
