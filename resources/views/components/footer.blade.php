@props(['type'])

<footer class="themed-section" data-bs-theme="{{ $theme }}">
  <div class="container py-5">
    <div class="py-md-5">
      <div class="row row-cols-1 row-cols-lg-2 gx-lg-5 py-md-5">
        {{-- Left Column --}}
        <div class="col">
          <div class="footer-header">
            <div
                class="position-relative fs-3 lh-1 flex-basis-lg-0 flex-lg-grow-1 text-lg-start text-center text-uppercase">
              {!! trans("footer.text_left_" . rand(1, 3)) !!}
            </div>
            <div class="footer-logo justify-content-end w-auto">!</div>
          </div>

          <div
              class="row row-cols-md-2 row-cols-xl-3 row-cols-1 justify-content-center justify-content-lg-start align-items-start">
            <div class="col mb-2 mb-lg-5">
              <x-contact-btn version="small" class="w-100 point-down"></x-contact-btn>
            </div>

            <div
                class="col w-100 mb-lg-3 mb-0 justify-content-center pt-3 pt-lg-0 justify-content-lg-start d-flex align-items-center">
              <x-svg-icon class="accent-color lang-logo" icon="icons/lang" alt="language selector"></x-svg-icon>

              @foreach(config("app.validLocales") as $lang)
                <a class="pe-2"
                   href="{{ \App\Providers\GlobalHelperProvider::localizeUrl($lang["code"]) }}">{{ $lang['label'] }}</a>
              @endforeach
            </div>

            <div class="col w-100">
              <div class="d-none d-lg-block">
                @include('components.footer.copyright')
              </div>
            </div>
          </div>
        </div>

        {{-- Right Column --}}
        <div class="col mt-5 mt-lg-0">
          <div class="footer-header flex-column flex-lg-row  mb-3 mb-lg-5">
            <x-svg-icon class="accent-color footer-logo" icon="logo" alt="logo web artisan bros"></x-svg-icon>

            <div class="position-relative fs-3 lh-1 flex-lg-grow-1">
              <span><span class="accent-color">W</span>eb</span>
              <span><span class="accent-color">A</span>rtisan</span>
              <span><span class="accent-color">B</span>ros</span>
            </div>
          </div>

          <div class="d-flex justify-content-center justify-content-lg-between  mb-5 align-items-center">
            <div class="lead d-none d-lg-block">Info:</div>

            <div class="social-icons-container">
              <a class="text-decoration-none" href="mailto:Info@webartisanbros.com">
                <x-svg-icon icon="icons/mail" alt="Mail Icon" class="wab-highlight"/>
              </a>
              <a class="text-decoration-none" href="https://www.linkedin.com/company/web-artisan-bros/" target="_blank">
                <x-svg-icon icon="icons/linkedin" alt="Linkedin Icon" class="wab-highlight"/>
              </a>
              <a class="text-decoration-none" href="https://github.com/Web-Artisan-Bros" target="_blank">
                <x-svg-icon icon="icons/github" alt="GitHub Icon" class="wab-highlight" />
              </a>
              <a class="text-decoration-none" href="https://www.facebook.com/WebArtisanBros" target="_blank">
                <x-svg-icon icon="icons/facebook" alt="Facebook Icon" class="wab-highlight"/>
              </a>

              <a class="text-decoration-none" href="https://www.instagram.com/web_artisan_bros/" target="_blank">
                <x-svg-icon icon="icons/instagram" alt="Instagram Icon" class="wab-highlight" />
              </a>
            </div>
          </div>

          <div class="text-center text-lg-start">
            <p>
              <strong class="lead">Web Artisan Bros</strong><br>
              Via San Rocco, 34/D - 36016 Thiene (VI)
            </p>
            <p>{{ __('Telefono')}}: <a href="tel:3290241530">+39 329 0241530</a></p>

            <p class="mb-0">E-mail: <a href="mailto:info@webartisanbros.com">info@webartisanbros.com</a></p>
            <p>Pec: <a href="mailto:leicamarius@pec.it">leicamarius@pec.it</a></p>

            <p class="mb-0">P. IVA: 04439020241</p>
            <p class="mb-0">CF: LCEMRS84B07Z129L</p>
            <p class="mb-0">Cod. REA: VI-404246</p>
          </div>
        </div>
      </div>

      <div class="text-center d-lg-none">
        @include('components.footer.copyright')
      </div>
    </div>
  </div>


  <div class="modal fade" tabindex="-1" id="cookieModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cookie Policy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <script id="CookieDeclaration" src="https://consent.cookiebot.com/00954f20-3d6f-4155-a821-e3c47a069e06/cd.js"
                  type="text/javascript" async></script>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" id="privacyModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Privacy Policy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <iframe src="https://www.iubenda.com/privacy-policy/37486167?ifr=true&amp;height=800" scrolling="no"
                  frameborder="0" allowtransparency="true"
                  style="border: none; background-clip: padding-box; width: 100%; height: 800px;"></iframe>
        </div>
      </div>
    </div>
  </div>


</footer>


