<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.css') }}" ></script>
    <title>Laravel-Movies</title>
  </head>
  <body>
    <header>
      @include('header')
    </header>
    <main class="p-1">
      @yield('content')
    </main>
  </body>
</html>
