@extends('./layouts/public')

@php
$theme = "dark";
$navbarVariant = "dark";
$noHeader = true;
$noFab = true;

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

        <h3 class="mb-4">CTO & CO-FOUNDER</h3>
        <h4 class="mb-5"><a class="text-decoration-none" href="www.webartisanbros.com" target="_blank">Web Artisan
            Bros</a></h4>

        <div class="social-icons-container icons-with-title" data-bs-theme="dark">
          <a class="text-decoration-none px-2" href="mailto:florian.leica@webartisanbros" target="_blank">
            <x-svg-icon icon="icons/mail" alt="email icon" class="wab-highlight" />
            <span class="icon-title">Email</span>
          </a>
          <a class="text-decoration-none px-2" href="tel:+393202942127" target="_blank">
            <x-svg-icon icon="icons/call" alt="Linkedin Icon" class="wab-highlight" />
            <span class="icon-title">{{ __('Telefono')}}</span>
          </a>
          <a class="text-decoration-none px-2" href="sms:+393202942127" target="_blank">
            <x-svg-icon icon="icons/sms" alt="Linkedin Icon" class="wab-highlight" />
            <span class="icon-title">SMS</span>
          </a>
          <a class="text-decoration-none px-2" href="https://wa.me/+393202942127" target="_blank">
            <x-svg-icon icon="icons/whatsapp" alt="Linkedin Icon" class="wab-highlight" />
            <span class="icon-title">WhatsApp</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="themed-section" data-bs-theme="light">
  <div class="container container-p-156">
    <x-neon-graphic text="{!! __('Contatti')!!}"></x-neon-graphic>
  </div>
</section>

<section class="themed-section" data-bs-theme="light">
  <div class="container container-p-156 pt-0">
    <div class="row row-cols-1 row-cols-md-2 gx-5">
      <div class="col">
        <blockquote class="blockquote text-end">
          <p class="fs-4">"{!! __('L&acute;unico <span class="wab-highlight">limite</span> siamo <span
              class="wab-highlight">noi stessi')!!}</span> !"</p>
          <p class="blockquote-footer"><cite title="Leica Florian Robert">Leica Florian Robert</cite></p>
        </blockquote>
      </div>
      <div class="col">
        <div>
          <div class="">
            <strong class="fs-5 pe-3">{!! __('Telefono')!!}:</strong>
            <a href="tel:+393202942127">+39 3202942127</a>
          </div>
          <div class="">
            <strong class="fs-5 pe-3">Email:</strong>
            <a href="mailto:florian.leica@webartisanbros.com">florian.leica@webartisanbros.com</a>
          </div>

          <div class="social-icons-container mt-3">
            <a class="text-decoration-none" href="https://www.linkedin.com/in/florian-robert-leica/" target="_blank">
              <x-svg-icon icon="icons/linkedin" alt="Linkedin Icon" class="wab-highlight" />
            </a>
            <a class="text-decoration-none" href="https://github.com/leicaflorian" target="_blank">
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

<div class="fab-container fab-container-right social-icons-container icons-with-title" data-bs-theme="light"
  style="opacity: 1;">
  <div class="btn-group dropup ">
    <a href="{{ route('team.vcard', "florian") }}" class="btn btn-themed">
      <x-svg-icon icon="icons/contact" alt="save contact icon" />
      <span class="icon-title d-none d-md-block">{{ __('Salva Contatto')}}</span>
    </a>
  </div>
</div>


<div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img class="h-25 w-25" src="/assets/florian_square.png" alt="">
        <div>
          <h1 class="modal-title fs-6" id="qrModalLabel">LEICA FLORIAN ROBERT</h1>
          <h2 class="modal-title fs-6" id="qrModalLabel">Cto & Co-Founder</h2>
          <h3 class="modal-title fs-6" id="qrModalLabel">Web Artisan Bros</h3>
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
<div class="fab-container social-icons-container" data-bs-theme="light" style="opacity: 1;">
  <div class="btn-group dropup">
    <a class="btn btn-themed" data-bs-toggle="modal" data-bs-target="#qrModal">
      <x-svg-icon icon="icons/qr" alt="show qr icon" />
    </a>
  </div>
  <div class="btn-group dropup">
    <a onclick="share()" class="btn btn-themed">
      <x-svg-icon icon="icons/share" alt="share icon" />
    </a>
  </div>
</div>

<script>
  function share() {
      navigator.share({
        title: 'My Contact Info',
        text: 'Check out my contact info',
        url: 'https://www.webartisanbros.com/team/e5b097b696'
      })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing:', error));
    }
</script>
@endsection
