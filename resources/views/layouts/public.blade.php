<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- HTML Meta Tags -->
  <title>Web Artisan Bros: web design & software house.</title>
  <meta name="description" content="{{ __('Web Artisan Bros è una piccola realtà artigianale che si distingue per la passione e l&acute;amore per le cose fatte bene. Siamo appassionati e amiamo il nostro lavoro e ci manteniamo costantemente aggiornati sulle ultime tecnologie e tendenze del settore.')}}">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://webartisanbros.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Web Artisan Bros: web design & software house.">
  <meta property="og:description" content="{{ __('Web Artisan Bros è una piccola realtà artigianale che si distingue per la passione e l&acute;amore per le cose fatte bene. Siamo appassionati e amiamo il nostro lavoro e ci manteniamo costantemente aggiornati sulle ultime tecnologie e tendenze del settore.')}}">
  <meta property="og:image" content="/assets/meta_logo.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="webartisanbros.com">
  <meta property="twitter:url" content="https://webartisanbros.com/">
  <meta name="twitter:title" content="Web Artisan Bros: web design & software house.">
  <meta name="twitter:description" content="{{ __('Web Artisan Bros è una piccola realtà artigianale che si distingue per la passione e l&acute;amore per le cose fatte bene. Siamo appassionati e amiamo il nostro lavoro e ci manteniamo costantemente aggiornati sulle ultime tecnologie e tendenze del settore.')}}">
  <meta name="twitter:image" content="/assets/meta_logo.png">

  <!-- Meta Tags Generated via https://www.opengraph.xyz -->

  <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
  <link rel="manifest" href="/assets/site.webmanifest">

  <title>{{ isset($pageTitle) ? $pageTitle . " | " : '' }} Web Artisan Bros</title>

  <!-- Scripts -->
  @vite(["resources/js/app.js", "resources/styles/app.scss"])
</head>

<body class="antialiased loading">
  <x-navbar theme="{{ $theme }}"/>

  <main>
    @yield('content')
  </main>

  <x-footer theme="{{ $theme }}"/>

  <x-offcanvas-contacts theme="{{ $theme }}"></x-offcanvas-contacts>

  {{-- Positioning the loader at the end so that can be visible independelty of z-index --}}
  <div class="loader" data-bs-theme="{{$theme}}">
    <div class="logo">
      <x-svg-icon icon="logo"></x-svg-icon>
    </div>
  </div>

  {{-- Livewire is used for the submit form --}}
  @livewireScripts
</body>

</html>
