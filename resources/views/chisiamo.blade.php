@extends('./layouts/public')

@php
  $theme = "yellow";
  $navbarVariant = "yellow";
  $pageTitle = "Chi siamo";
@endphp

@section ('content')

<x-jumbo dnone="true" class="bg-primary" reverseJumbo="flex-row-reverse">
  <x-slot:textBorderColor>
    bordeTextBlack
  </x-slot:textBorderColor>
  <x-slot:reverse>
    btn-reverse-white
  </x-slot:reverse>
  <x-slot:imgCenter>
    /assets/WhiteArrow.svg
  </x-slot:imgCenter>
  <x-slot:text>
    <div class="mb-5">
      <h1 class="text-dark">SIAMO <span class="text-dark wab-highlight wab-highlight--secondary">
          WEB </span><span class="text-dark wab-highlight wab-highlight--secondary">
          ARTISAN</span> <span class="text-dark wab-highlight wab-highlight--secondary">BROS</span></h1>
    </div>
    <div>
      <div class="d-flex">
        <p class="lead text-dark">Aiutiamo il tuo business a farsi <span class="wab-highlight wab-highlight--secondary text-dark">notare</span> in un mondo digitale</p>
        <hr class="w-25 opacity-100">
      </div>
    </div>
  </x-slot:text>
  <x-slot:jumboImg>
    <img class="w-100 img-border" src="/assets/JumboChiSiamoBorder.png" alt="a yellow border of the img">
    <figure class="h-100">
      <div class="img-area w-100">
        <img class="w-100 img-bw" src="/assets/JumboChiSiamoColor.png" alt="Welcome neon sign">
      </div>
    </figure>

  </x-slot:jumboImg>

</x-jumbo>

<section>
  <div class="container container-p-156">
    <div class="row position-relative">
      <!-- <h2 class="filigram text-center text-wrap position-absolute top-50 start-50 translate-middle">ABOUT<br>US</h2> -->
      <div class="col">
        <div class="pt-5 position-relative">
          <img class="w-100 img-border" src="/assets/AboutUsBorder.png" alt="a yellow border of the img">
          <figure class="h-100">
            <div class="img-area w-100">
              <img class="w-100 img-bw" src="/assets/AboutUsColor.png" alt="Welcome neon sign">
            </div>
          </figure>
        </div>
      </div>
      <div class="col-1"></div>
      <div class="col">
        <h2>CHI SIAMO</h2>
        <hr class="w-50">
        <p class="lead">Web Artisan Bros ha lo scopo di aiutare le aziende a raggiungere i loro obiettivi di business online in un mondo digitale. Il nostro team affiatato e professionale, si dedica con passione a ogni progetto per creare soluzioni uniche. Ascoltare le tue esigenze e troviamo le soluzioni più adatte al tuo business. Offriamo supporto continuo e consulenza per garantire il massimo successo dei nostri progetti. Siamo prima di tutto artigiani, curiamo con attenzione maniacale ogni progetto.</p>
      </div>
    </div>
  </div>
</section>

<x-contact background="reverse-contact">
  <x-slot:reverse>
    btn-hover
  </x-slot:reverse>
  <x-slot:imgCenter>
    /assets/YellowArrow.svg
  </x-slot:imgCenter>
  <x-slot:message class="lead">

  </x-slot:message>
</x-contact>

<section class="bg-dark">
  <div class="container container-p-156 overflow-hidden">
    <div class="row">
      <div class="col"></div>
      <div class="col-5">
        <h2 class="">ECCO IL NOSTRO PROCESSO <span class="wab-highlight text-dark">ARTIGIANALE</span></h2>
        <div class="d-flex flex-row-reverse align-items-center">
          <p class="lead ps-3">soluzioni personalizzate e artigianali per ogni cliente. esperienza e tecnologie all'avanguardia.</p>
          <hr class="w-25 opacity-100 primary-hr">
        </div>
      </div>
    </div>
    <x-diagonalAccordion :entries="$accordionOurProcess">

    </x-diagonalAccordion>


  </div>
</section>

@endsection
