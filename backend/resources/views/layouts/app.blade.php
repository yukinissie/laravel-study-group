<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Laravel-Movies</title>
  </head>
  <body>
    <div>
      <header>
        @include('header')
      </header>
      <main>
        @yield('content')
      </main>
    </div>
  </body>
</html>
