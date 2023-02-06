@extends('layouts.public')

@php
  $theme = "dark";
  $navbarVariant = "dark";
  $pageTitle = "Home";
@endphp

@section ('content')

  <x-jumbo dnone="true">
    <x-slot:textBorderColor>
      bordeTextWhite
    </x-slot:textBorderColor>
    <x-slot:reverse>
      btn-hover
    </x-slot:reverse>
    <x-slot:imgCenter>
      /assets/YellowArrow.svg
    </x-slot:imgCenter>
    <x-slot:text>
      <div class="mb-5">
        <h1 class="">WEB DESIGN</h1>
        <h2 class="fs-3 f-spacing ">PERSONALIZZATO</h2>
        <h2 class="">E <span class="wab-highlight">
          ARTIGIANALE</span></h2>
      </div>
      <div>
        <div class="d-flex">
          <p class="lead">Aiutiamo il tuo business a farsi <span class="wab-highlight ">notare</span> in un mondo
            digitale</p>
          <hr class="w-25 opacity-100">
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
      <div class="">
        <div class="" id="anchor">
          <div class="" id="box">
            <x-svg-icon id="arrow" icon="BigArrow"></x-svg-icon>
          </div>
        </div>
      </div>
      <div class="row g-2  flex-wrap">
        @foreach($cardsHome as $card)
          <div class="col">
            <x-service-card number="{{ $card['num'] }}" title='{!! $card["title"] !!}'>
              <a href="{{url('servizi')}}" class="btn btn-primary">Scopri di più
                <x-svg-icon icon="VectorArrow"></x-svg-icon>
              </a>
            </x-service-card>
          </div>
        @endforeach
      </div>
    </x-slot:cards>
    <div class="mb-5">
      <h2 class=" position-relative z-index1">AI NOSTRI <br>
        <span class="wab-highlight">CLIENTI</span> OFFRIAMO SEMPRE <br>
        <span class="wab-highlight">IL MEGLIO</span>
      </h2>
    </div>
    <div>
      <div class="d-flex">
        <hr class="w-25 opacity-100">
        <p class="lead ms-2">Ecco cosa possiamo offrirti</p>


        <!-- </div> -->
      </div>
      <!-- <p class="lead"></p> -->
    </div>
  </x-services>

  <x-contact class="mt-4" background="bg-primary">
    <x-slot:reverse>
      btn-hover
    </x-slot:reverse>
    <x-slot:imgCenter>
      /assets/WhiteArrow.svg
    </x-slot:imgCenter>
  </x-contact>
  <x-accordion class="light-accordion" :entries="$accordionWhyUs"/>
  <x-footer background="dark-footer"/>

@endsection
