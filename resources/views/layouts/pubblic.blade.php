<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
  <link rel="manifest" href="/assets/site.webmanifest">

  <title>{{ 'WAB - Guest' }}</title>

  <!-- Scripts -->
  @vite(["resources/js/app.js", "resources/styles/app.scss"])

  <!-- Styles -->
  
</head>

<body class="antialiased">
<x-header/>
  @yield('content')
<x-footer/>

</body>
</html>
