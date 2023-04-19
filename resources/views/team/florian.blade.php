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
  $pageTitle = 'Florian Vcard';
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

  <main class="py-5 my-5 v-card">
    <div class="card mx-auto overflow-hidden" style="width: 70vw;" themed-section" data-bs-theme="dark">
      <div class="card-body p-0">
        <section class="py-3 themed-section" data-bs-theme="dark">
          <div class="container px-4">
        
            <img  src="/assets/florian_square.png" class="w-50
           rounded me-auto d-block mb-3" alt="Leica Florian Robert image">
        
            <h1 class="text-wrap"><span class="wab-highlight">Leica</span> <span class="wab-highlight">Florian</span> <span class="wab-highlight">Robert</span></h1>
        
            <hr class="w-25 me-auto">
        
            <h4 class="text-primary">CTO & CO-FOUNDER</h4>
            <h4 class="text-primary">Web Artisan Bros</h4>
            
            <footer class="py-3 themed-section" data-bs-theme="dark">
                <div class="">
                  <hr class="w-25 me-auto">
                  <div class="social-icons-container d-block">      
                    <a class="text-decoration-none" href="mailto:florian.leica@webartisanbros" target="_blank">
                      <x-svg-icon icon="icons/mail" alt="Linkedin Icon" class="wab-highlight" />
                    </a>
                    <a class="text-decoration-none" href="tel:+393202942127" target="_blank">
                      <x-svg-icon icon="icons/call" alt="Linkedin Icon" class="wab-highlight" />
                    </a>
                    <a class="text-decoration-none" href="sms:+393202942127" target="_blank">
                      <x-svg-icon icon="icons/sms" alt="Linkedin Icon" class="wab-highlight" />
                    </a>
                    <a class="text-decoration-none" href="https://wa.me/+393202942127" target="_blank">
                      <x-svg-icon icon="icons/whatsapp" alt="Linkedin Icon" class="wab-highlight" />
                    </a>
                  </div>
                </div>
              </div>
            </footer>
          </div>
        </section>
        <section class="themed-section py-3" data-bs-theme="yellow">
          <div class="container px-4">
            <h3>CREIAMO ESPERIENZE DIGITALI ARTIGIANALI</h3>
          </div>
        </section>
        <section class="py-3 themed-section" data-bs-theme="light">
          <div class="container px-4">
            <h4>Contatti</h4>
            <hr class="w-25 me-auto">
            <div>
              <div class="d-flex flex-column flex-sm-row">
                <h5 class="pe-3">Telefono:</h5>
                <a href="tel:+393290241530">+39 3202942127</a>
              </div>
              <div class="d-flex flex-column flex-sm-row">
                <h5 class="pe-3">Email:</h5>
                <a href="mailto:florian.leica@webartisanbros.com">florian.leica@webartisanbros.com</a>
        
              </div>
            </div>
          </div>
        </section>
        <section class="py-3 themed-section" data-bs-theme="yellow">
          <div class="container px-4">
            <h4>Visita il nostro sito!</h4>
            <h5>Cosi potrai conoscerci meglio 😉</h5>
            <hr class="w-25 me-auto">
            <div class="wab_link">
              <a href="https://webartisanbros.com" target="_blank"
                class="d-flex flex-column flex-md-row align-content-start align-items-center text-decoration-none">
                <img src="/assets/Dark.svg" alt="WAB Logo" class="me-auto me-md-0 mb-3 mb-md-0" style="max-width: 100px">
                <div class="text-start ps-md-4 me-auto me-md-0 text-wrap">
                  <h4 class="text-wrap text-break">www.webartisanbros.com</h4>
                  <h6 class="text-wrap text-break">Web Boutique And Software House</h6>
                </div>
                <x-svg-icon class="arrow_icon d-none d-md-block me-auto" icon="arrow_bottom_right"></x-svg-icon>
              </a>
            </div>
          </div>
        </section>
        <footer class="py-3 themed-section" data-bs-theme="dark">
          <div class="container px-4">
        
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
        <div class="settings-fab-container to-right" data-bs-theme="light" style="opacity: 1;">
          <div class="btn-group dropup">
            <a href="{{ route('download.vcard') }}" class="btn btn-themed"><img src="/assets/icons/contact.svg" alt="">
              <span class="d-none d-sm-block">Salva Contatto</span></a>
          </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <img class="h-25 w-25" src="/assets/florian_square.png" alt="">
                <div>
                  <h1 class="modal-title fs-6 mb-2" id="exampleModalLabel">LEICA FLORIAN ROBERT</h1>
                  <h2 class="modal-title fs-6" id="exampleModalLabel">Cto & Co-Founder</h2>
                  <h3 class="modal-title fs-6" id="exampleModalLabel">Web Artisan Bros</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-center">
        
                <img class="w-50 h-50" src="/assets/qr_florian.svg" alt="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="settings-fab-container" data-bs-theme="light" style="opacity: 1;">
          <div class="btn-group dropup">
            <button class="btn btn-themed" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="/assets/icons/qr.svg"
                alt="">
            </button>
          </div>
          <div class="btn-group dropup">
            <button onclick="share()" class="btn btn-themed"><img src="/assets/icons/share.svg" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>

    {{-- <section class="py-3 themed-section" data-bs-theme="dark">
      <div class="container">

        <img src="/assets/florian.png" class="w-25
   rounded mx-auto d-block " alt="Leica Marius image">

        <h1 class="wab-highlight"><span class="wab-highlight">Leica Florian Robert</span></h1>

        <hr class="w-25 mx-auto">

        <h4 class="text-primary">CTO & CO-FOUNDER</h4>
        <h4 class="text-primary">Web Artisan Bros</h4>
        <footer class="py-3 themed-section" data-bs-theme="dark">
          <div class="container">

            <div class="mb-5 text-center">
              <hr class="w-25 mx-auto">

              <div class="social-icons-container d-block">

                <a class="text-decoration-none px-2" href="mailto:florian.leica@webartisanbros" target="_blank">
                  <x-svg-icon icon="icons/mail" alt="Linkedin Icon" class="wab-highlight" />
                </a>
                <a class="text-decoration-none px-2" href="tel:+393202942127" target="_blank">
                  <x-svg-icon icon="icons/call" alt="Linkedin Icon" class="wab-highlight" />
                </a>
                <a class="text-decoration-none px-2" href="sms:+393202942127" target="_blank">
                  <x-svg-icon icon="icons/sms" alt="Linkedin Icon" class="wab-highlight" />
                </a>
                <a class="text-decoration-none px-2" href="https://wa.me/+393202942127" target="_blank">
                  <x-svg-icon icon="icons/whatsapp" alt="Linkedin Icon" class="wab-highlight" />
                </a>

              </div>
            </div>

          </div>
        </footer>

      </div>
    </section> --}}

    {{-- <section class="themed-section py-3" data-bs-theme="yellow">
      <div class="container">
        <h3>CREIAMO ESPERIENZE DIGITALI ARTIGIANALI</h3>
      </div>
    </section> --}}
    {{-- <section class="py-3 themed-section" data-bs-theme="light">
      <div class="container">
        <h4>Contatti</h4>
        <hr class="w-25 mx-auto">
        <div>
          <div class="d-flex justify-content-center">
            <h5 class="pe-3">Telefono:</h5>
            <a href="tel:+393290241530">+39 3202942127</a>
          </div>
          <div class="d-flex justify-content-center">
            <h5 class="pe-3">Email:</h5>
            <a href="mailto:florian.leica@webartisanbros.com">florian.leica@webartisanbros.com</a>

          </div>
        </div>
      </div>
    </section> --}}
    {{-- <section class="py-3 themed-section" data-bs-theme="yellow">
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
    </section> --}}
    {{-- <footer class="py-3 themed-section" data-bs-theme="dark">
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
    </footer> --}}



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
  <script>
    function share() {
      navigator.share({
        title: 'My Contact Info',
        text: 'Check out my contact info',
        url: 'https://www.webartisanbros.com/team/5a13e4fd16'
      })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing:', error));
    }
  </script>
</body>

</html>