@extends('layouts.public')

@php
$theme = "dark";
$navbarVariant = "dark";
$pageTitle = "Home";
@endphp

@section ('content')

<x-jumbo dnone="true" reverseJumbo="flex-lg-row" theme="dark">
  <x-slot:reverse>
    btn-hover
  </x-slot:reverse>

  <x-slot:text>
    <div class="mb-3 mb-lg-5">
      <h1>WEB DESIGN</h1>
      <h2 class="fs-3 f-spacing text-break">PERSONALIZZATO</h2>
      <h2 class="">E <span class="wab-highlight">
          ARTIGIANALE</span></h2>
    </div>
    <div>
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <p class="lead">Aiutiamo il tuo business a farsi <span class="wab-highlight ">notare</span> in un mondo
          digitale</p>
        <hr class="w-25 opacity-100 d-none d-lg-block">
      </div>
    </div>
  </x-slot:text>
  <x-slot:jumboImg>
    <img class="w-100 img-border" src="/assets/JumboHomeBorder.png" alt="a yellow border of the img">
    <figure class="h-100">
      <div class="img-area w-100">
        <img class="w-100 img-bw" src="/assets/JumboHomeColor.png" alt="Welcome neon sign">
      </div>
    </figure>

  </x-slot:jumboImg>
</x-jumbo>

<x-services img=/assets/JumboService.png :cards="$cardsHome" theme="light">

  <x-slot:cards>
    <x-svg-icon class="d-none d-lg-inline-block" id="arrow" icon="BigArrow"></x-svg-icon>
    <div class="row g-2 flex-column flex-md-row">
      @foreach($cardsHome as $card)
      <div class="col d-flex d-lg-block justify-content-center mb-3 mb-lg-0 pt-1 pt-lg-0 pt-md-4">
        <x-service-card number="{{ $card['num'] }}" title='{!! $card["title"] !!}'>
          <a href="{{url('servizi')}}" class="btn btn-themed mt-3 mt-lg-0">Scopri di <span>+</span>
            <x-svg-icon icon="VectorArrow"></x-svg-icon>
          </a>
        </x-service-card>
      </div>
      @endforeach
    </div>
  </x-slot:cards>

  <div class="mb-4 mb-lg-5">
    <h2 class=" position-relative z-index1 d-flex d-lg-block flex-column align-items-center text-center text-lg-start">AI NOSTRI <br>
      <span class="wab-highlight">CLIENTI</span>
      <span class=" ">OFFRIAMO SEMPRE</span>
      <span class="wab-highlight">IL MEGLIO</span>
    </h2>
  </div>
  <div>
    <div class="d-flex flex-column flex-lg-row align-items-center">
      <hr class="w-25 opacity-100">
      <p class="lead ms-0 ms-lg-2">Ecco cosa possiamo offrirti</p>
    </div>
  </div>
</x-services>

<x-contact class="mt-4" theme="yellow">
  <x-slot:reverse>
    btn-hover
  </x-slot:reverse>
</x-contact>

<x-accordion :entries="$accordionWhyUs" theme="light">
</x-accordion>

@endsection
