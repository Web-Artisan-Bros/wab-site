<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @php
    $title = (isset($pageTitle) ? ucwords(strtolower($pageTitle)) . " | " : '') . "Web Artisan Bros: Web Boutique & Software House";
    $description = __('Web Artisan Bros è una piccola realtà artigianale che si distingue per la passione e l&acute;amore per le cose fatte bene. Siamo appassionati e amiamo il nostro lavoro e ci manteniamo costantemente aggiornati sulle ultime tecnologie e tendenze del settore.');
  @endphp

  <title>{{$title}}</title>
  <meta name="description" content="{{ $description }}">

  @include('components.head.favicon')

  @include('components.head.social-tags', ["title"=> $title, "description" => $description])

  @foreach(config("app.validLocales") as $lang)
    <link rel="alternate" hreflang="{{$lang["code"] === 'it' ? 'x-default' : $lang["code"]}}"
          href="{{\App\Providers\GlobalHelperProvider::localizeUrl($lang["code"])}}"/>
  @endforeach

  <!-- Scripts -->
  @vite(["resources/js/app.js", "resources/styles/app.scss"])

  <script>
    window.addEventListener('load', function () {
      const cookieScript = document.createElement('script')
      cookieScript.id = 'Cookiebot'
      cookieScript.src = 'https://consent.cookiebot.com/uc.js'
      cookieScript.setAttribute('data-cbid', '00954f20-3d6f-4155-a821-e3c47a069e06')
      cookieScript.async = true

      setTimeout(() => {
        document.head.appendChild(cookieScript)
      }, 1200)
    })
  </script>
</head>

<body class="antialiased loading">
  @if(!isset($noHeader) || !$noHeader)
    <x-navbar theme="{{ $theme }}"/>
  @endif

  <main>
    @yield('content')
  </main>

  @if(!isset($noFooter) || !$noFooter)
    <x-footer theme="{{ $theme }}"/>
  @endif

  @if(!isset($noFab) || !$noFab)
  <x-settings-fab theme="{{ $theme }}"></x-settings-fab>
  @endif

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
