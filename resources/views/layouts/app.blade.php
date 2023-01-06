<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ 'WAB - Admin' }}</title>

  <!-- Scripts -->
  @vite(["resources/js/app.js", "resources/styles/app.scss"])

  <!-- Styles -->
  @livewireStyles
</head>

<body class="antialiased">

<x-jet-banner/>

@livewire('navigation-menu')

<div class="container-fluid">

  <!-- Page Heading -->
  @if (isset($header))
    <header class="py-4">
      <div class="">
        {{ $header }}
      </div>
    </header>
  @endif

  <!-- Page Content -->
  <main>
    {{ $slot }}
  </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
