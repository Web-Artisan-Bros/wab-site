@php
  $theme = "yellow";
@endphp

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

  <title>@yield("title") | Web Artisan Bros</title>

  <!-- Scripts -->
  @vite(["resources/js/app.js", "resources/styles/app.scss"])
</head>
<body class="antialiased loading">
  <x-navbar theme="{{ $theme }}"/>
  {{--<div
      class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
      <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
          <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
              <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                  asada
                  @yield('code')
              </div>

              <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                  @yield('message')
              </div>
          </div>
      </div>
  </div>--}}

  <main>
    <section class="themed-section" data-bs-theme="yellow">
      <div class="container container-p-156">
        <div class="mb-4">
          <x-neon-graphic text="">@yield('code')</x-neon-graphic>
        </div>
        <div>
          <x-neon-graphic text="">@yield('message')</x-neon-graphic>
        </div>
      </div>
    </section>
  </main>

  <x-offcanvas-contacts theme="{{ $theme }}"></x-offcanvas-contacts>

  {{-- Positioning the loader at the end so that can be visible independelty of z-index --}}
  <div class="loader" data-bs-theme="{{$theme}}">
    <div class="logo">
      <x-svg-icon icon="logo"></x-svg-icon>
    </div>
  </div>

  <x-footer theme="dark"/>

  @livewireScripts
</body>
</html>
