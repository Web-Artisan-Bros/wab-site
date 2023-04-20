@extends('./layouts/public')

@php
  $theme = "dark";
  $navbarVariant = "dark";
  $noHeader = true;

  $pageTitle = "Leica Florian Robert";
@endphp

@section ('content')
  <section class="themed-section ">
    <div class="container container-p-156">
      <div class="row align-items-center">
        <div class="col-md-4">
          <img src="/assets/florian_square.png" class="w-100" alt="Leica Florian Robert profile image">
        </div>
        <div class="col-md-8">
          <h1 class="mb-4">Leica Florian Robert</h1>

          <h3 class="mb-5">CTO & CO-FOUNDER</h3>

          <div class="social-icons-container icons-with-title" data-bs-theme="dark">
            <a class="text-decoration-none px-2" href="mailto:florian.leica@webartisanbros" target="_blank">
              <x-svg-icon icon="icons/mail" alt="email icon" class="wab-highlight"/>
              <span class="icon-title">Email</span>
            </a>
            <a class="text-decoration-none px-2" href="tel:+393290241530" target="_blank">
              <x-svg-icon icon="icons/call" alt="Linkedin Icon" class="wab-highlight"/>
              <span class="icon-title">Telefono</span>
            </a>
            <a class="text-decoration-none px-2" href="sms:+393290241530" target="_blank">
              <x-svg-icon icon="icons/sms" alt="Linkedin Icon" class="wab-highlight"/>
              <span class="icon-title">SMS</span>
            </a>
            <a class="text-decoration-none px-2" href="https://wa.me/+393290241530" target="_blank">
              <x-svg-icon icon="icons/whatsapp" alt="Linkedin Icon" class="wab-highlight"/>
              <span class="icon-title">WhatsApp</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="themed-section" data-bs-theme="light">
    <div class="container container-p-156">
      <x-neon-graphic text="Contatti"></x-neon-graphic>
    </div>
  </section>

  <section class="themed-section" data-bs-theme="light">
    <div class="container container-p-156 pt-0">
      <div class="row row-cols-1 row-cols-md-2 gx-5">
        <div class="col">
          <blockquote class="blockquote text-end">
            <p class="fs-4">"Non esiste <span class="wab-highlight">limite</span> se non la propria <span
                  class="wab-highlight">fantasia</span> !"</p>
            <footer class="blockquote-footer"><cite title="Leica Florian Robert">Leica Florian Robert</cite></footer>
          </blockquote>
        </div>
        <div class="col">
          <div>
            <div class="">
              <strong class="fs-5 pe-3">Telefono:</strong>
              <a href="tel:+393290241530">+39 3290241530</a>
            </div>
            <div class="">
              <strong class="fs-5 pe-3">Email:</strong>
              <a href="mailto:marius.leica@webartisanbros.com">marius.leica@webartisanbros.com</a>
            </div>

            <div class="social-icons-container mt-3">
              <a class="text-decoration-none" href="https://www.linkedin.com/company/web-artisan-bros/" target="_blank">
                <x-svg-icon icon="icons/linkedin" alt="Linkedin Icon" class="wab-highlight"/>
              </a>
              <a class="text-decoration-none" href="https://github.com/Web-Artisan-Bros" target="_blank">
                <x-svg-icon icon="icons/github" alt="GitHub Icon" class="wab-highlight" />
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <x-contact class="mt-4" theme="yellow">
  </x-contact>
@endsection
