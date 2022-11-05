<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/players.css">
  </head>
  <body>
    
    @include('partials.nav')
    <div class="content">
        @yield('content')
    </div>
  </body>
</html>