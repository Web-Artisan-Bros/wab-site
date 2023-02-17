<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
  <link rel="manifest" href="/assets/site.webmanifest">

  <title>{{ isset($pageTitle) ? $pageTitle . " | " : '' }} Web Artisan Bros</title>

  <!-- Scripts -->
  @vite(["resources/js/app.js", "resources/styles/app.scss"])
</head>

<body class="antialiased">
  <div class="loader">
    <img src="/assets/loader.svg" alt="loader">
  </div>

  <x-navbar theme="{{ $theme }}" />

  @yield('content')

  <x-footer theme="{{ $theme }}" />

  <script>
    $(function(){
      setTimeout(() => {
        $(".loader");
      }, 500)
    })
  </script>
</body>

</html>