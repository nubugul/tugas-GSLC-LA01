<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
    
    @include('partials.nav')
    <div class="content">
      <div class="welcome">
        @yield('content')
      <div class="logo">
        <img src="img/logo2.png" alt="logo" class="logoimg">
      </div>
    </div>
    </div>
  </body>
</html>