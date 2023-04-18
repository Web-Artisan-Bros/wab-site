<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
 <meta name="csrf-token" content="{{ csrf_token() }}">

 @php
 $title = (isset($pageTitle) ? ucwords(strtolower($pageTitle)) . " | " : '') . "Web Artisan Bros: Web Boutique &
 Software House";
 $description = __('Web Artisan Bros è una piccola realtà artigianale che si distingue per la passione e l&acute;amore
 per le cose fatte bene. Siamo appassionati e amiamo il nostro lavoro e ci manteniamo costantemente aggiornati sulle
 ultime tecnologie e tendenze del settore.');
 $theme = 'dark';
 $pageTitle = 'Marius Vcard';
 @endphp

 <title>{{$title}}</title>
 <meta name="description" content="{{ $description }}">

 @include('components.head.favicon')

 @include('components.head.social-tags', ["title"=> $title, "description" => $description])

 {{-- @foreach(config("app.validLocales") as $lang)
 <link rel="alternate" hreflang="{{$lang[" code"]==='it' ? 'x-default' : $lang["code"]}}"
  href="{{\App\Providers\GlobalHelperProvider::localizeUrl($lang[" code"])}}" />
 @endforeach --}}

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
 {{--
 <x-navbar theme="{{ $theme }}" /> --}}

 <main class="text-center">

  <section class="py-3 themed-section" data-bs-theme="dark">
   <div class="container">

    <img src="/assets/marius.png" class="w-25
   rounded mx-auto d-block " alt="Leica Marius image">

    <h1 class="wab-highlight"><span class="wab-highlight">Leica Marius</span></h1>

    <hr class="w-25 mx-auto">

    <h4 class="text-primary">CEO & CO-FOUNDER</h4>
    <h4 class="text-primary">Web Artisan Bros</h4>
    <footer class="py-3 themed-section" data-bs-theme="dark">
     <div class="container">
    
      <div class="mb-5 text-center">
    <hr class="w-25 mx-auto">
    
       <div class="social-icons-container d-block">
    
        <a class="text-decoration-none px-2" href="mailto:marius.leica@webartisanbros" target="_blank">
         <x-svg-icon icon="icons/mail" alt="Linkedin Icon" class="wab-highlight" />
        </a>
        <a class="text-decoration-none px-2" href="tel:+393290241530" target="_blank">
         <x-svg-icon icon="icons/call" alt="Linkedin Icon" class="wab-highlight" />
        </a>
        <a class="text-decoration-none px-2" href="sms:+393290241530" target="_blank">
         <x-svg-icon icon="icons/sms" alt="Linkedin Icon" class="wab-highlight" />
        </a>
        <a class="text-decoration-none px-2" href="https://wa.me/+393290241530" target="_blank">
          <x-svg-icon icon="icons/whatsapp" alt="Linkedin Icon" class="wab-highlight" />
        </a>
       </div>
      </div>
    
     </div>
    </footer>
    
   </div>
  </section>

  <section class="themed-section py-3" data-bs-theme="yellow">
   <div class="container">
    <h3>CREIAMO ESPERIENZE DIGITALI ARTIGIANALI</h3>
   </div>
  </section>
  <section class="py-3 themed-section" data-bs-theme="light">
   <div class="container">
    <h4>Contatti</h4>
    <hr class="w-25 mx-auto">
    <div>
     <div class="d-flex justify-content-center">
      <h5 class="pe-3">Telefono:</h5>
      <a href="tel:+393290241530">+39 3290241530</a>
     </div>
     <div class="d-flex justify-content-center">
      <h5 class="pe-3">Email:</h5>
      <a href="mailto:marius.leica@webartisanbros.com">marius.leica@webartisanbros.com</a>
     </div>
    </div>
   </div>
  </section>
  <section class="py-3 themed-section" data-bs-theme="yellow">
   <div class="container">
    <h4>Visita il nostro sito!</h4>
    <h5>Cosi potrai conoscerci meglio 😉</h5>
    <hr class="w-25 mx-auto">
    <div>
     <a href="https://webartisanbros.com" target="_blank"
      class="d-flex justify-content-center align-items-center text-decoration-none">
      <img src="/assets/Dark - Round.svg" alt="WAB Logo" class="" style="max-width: 100px">
      <div class="text-start ps-4">
       <h4>Web Artisan Bros</h4>
       <h5>Web Boutique And Software House</h5>
      </div>
     </a>
    </div>
   </div>
  </section>
  <footer class="py-3 themed-section" data-bs-theme="dark">
   <div class="container">

    <div class="mb-5 text-center">
     <h4 class="">WE ARE SOCIAL</h4>
     <hr class="w-25 mx-auto">

     <div class="social-icons-container d-block">

      <a class="text-decoration-none" href="https://www.linkedin.com/company/web-artisan-bros/" target="_blank">
       <x-svg-icon icon="icons/linkedin" alt="Linkedin Icon" class="wab-highlight" />
      </a>
      <a class="text-decoration-none" href="https://github.com/Web-Artisan-Bros" target="_blank">
       <x-svg-icon icon="icons/github" alt="GitHub Icon" class="wab-highlight" />
      </a>
      <a class="text-decoration-none" href="https://www.facebook.com/WebArtisanBros" target="_blank">
       <x-svg-icon icon="icons/facebook" alt="Facebook Icon" class="wab-highlight" />
      </a>

      <a class="text-decoration-none" href="https://www.instagram.com/web_artisan_bros/" target="_blank">
       <x-svg-icon icon="icons/instagram" alt="Instagram Icon" class="wab-highlight" />
      </a>
     </div>
    </div>

   </div>
  </footer>



 </main>

 {{--
 <x-footer theme="{{ $theme }}" /> --}}

 {{-- <x-settings-fab theme="{{ $theme }}"></x-settings-fab> --}}

 {{-- <x-offcanvas-contacts theme="{{ $theme }}"></x-offcanvas-contacts> --}}

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