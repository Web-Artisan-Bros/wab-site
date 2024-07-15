<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
{{--  <meta name="csrf-token" content="{{ csrf_token() }}">--}}
<meta name="msvalidate.01" content="3B95437DC390652760FB0279545216B0" />

  <title>@yield("title") {{ 'WAB - Admin' }}</title>

  <!-- Scripts -->
  @vite(["resources/js/admin.js", "resources/styles/admin.scss"])

  <!-- Styles -->
  @livewireStyles
</head>

<body class="antialiased">

<livewire:nav-menu></livewire:nav-menu>

  @if (isset($header))
    <header class="py-4">
      <div class="">
        {{ $header }}
      </div>
    </header>
  @endif

  <!-- Page Content -->
  <main>
    @yield('content')
  </main>

@stack('modals')



@livewireScripts
</body>
</html>
