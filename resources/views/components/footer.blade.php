@props(['type'])

<footer class="themed-section" data-bs-theme="{{ $theme }}">
  <div class="container py-5">
    <div class="py-md-5">
      <div class="row row-cols-1 row-cols-lg-2 gx-lg-5 py-md-5">
        {{-- Left Column --}}
        <div class="col">
          <div class="footer-header">
            <div class="position-relative fs-3 lh-1 flex-basis-lg-0 flex-lg-grow-1 text-lg-start text-center text-uppercase">
              {!! trans("footer.text_left_" . rand(1, 3)) !!}
            </div>
            <div class="footer-logo justify-content-end w-auto">!</div>
          </div>

          <div class="row row-cols-md-2 row-cols-xl-3 row-cols-1 justify-content-center justify-content-lg-start align-items-start">
            <div class="col mb-2 mb-lg-5">
              <x-contact-btn version="small" class="w-100 point-down"></x-contact-btn>
            </div>

            <div class="col w-100 mb-lg-3 mb-0 justify-content-center pt-3 pt-lg-0 justify-content-lg-start d-flex align-items-center">
              <x-svg-icon class="accent-color lang-logo" icon="lang" alt="language selector"></x-svg-icon>
              @foreach(config("app.validLocales") as $lang)
                <a class="pe-2" href="{{ route('change-locale', $lang['code']) }}">{{ $lang['label'] }}</a>
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
              <a class="text-decoration-none" href="mailto:Info@webartisan.com">
                <x-svg-icon icon="VectorMail" alt="Mail Icon" class="wab-highlight"/>
              </a>
              <a class="text-decoration-none" href="https://www.instagram.com/webartisanbros/">
                <x-svg-icon icon="VectorInsta" alt="Instagram Icon" class="wab-highlight"/>
              </a>
              <a class="text-decoration-none" href="#">
                <x-svg-icon icon="VectorGit" alt="Git Hub Icon" class="wab-highlight"/>
              </a>
              <a class="text-decoration-none" href="#">
                <x-svg-icon icon="VectorInsta" alt="Instagram Icon" class="wab-highlight"/>
              </a>
            </div>
          </div>

          <div class="text-center text-lg-start">
            <p>
              <strong class="lead">Web Artisan Bros</strong><br>
              Via San Rocco, 34/D - 36016 Thiene (VI)
            </p>
            <p>{{ __('Telefono')}}: <a href="3290241530">3290241530</a></p>
            <p>E-mail: <a href="mailto:Info@webartisanbros.com">Info@webartisanbros.com</a></p>
            <p class="mb-0">P. IVA 04439020241</p>
          </div>
        </div>
      </div>

      <div class="text-center d-lg-none">
        @include('components.footer.copyright')
      </div>
    </div>
  </div>
</footer>
