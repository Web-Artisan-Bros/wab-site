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
        <h1 class="text-uppercase">{!! __('esperienze digitali <span class="wab-highlight">artigianali') !!}</span></h1>


      </div>
      <div>
        <div class="d-flex flex-lg-row flex-column align-items-center">
          <p class="lead">{!! __('Aiutiamo il tuo business a farsi <span class="wab-highlight">notare</span> in un mondo
          digitale')!!}</p>
          <hr class="w-25 opacity-100 d-none d-lg-block">
        </div>
      </div>
    </x-slot:text>
    <x-slot:jumboImg>
      {{--      <x-bordered-image src="/assets/JumboHomeColor.png" alt="Welcome neon sign"></x-bordered-image>--}}
      <x-neon-graphic text="Welcome"></x-neon-graphic>
    </x-slot:jumboImg>
  </x-jumbo>

  <x-services img=/assets/JumboService.png :cards="$cardsHome" theme="light">

    <x-slot:cards>
      <x-svg-icon class="d-none d-lg-inline-block" id="arrow" icon="BigArrow"></x-svg-icon>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-2 gy-4 justify-content-center">
        @foreach($cardsHome as $card)
          <div class="col">
            <x-service-card number="{{ $card['num'] }}" title="{{ trans('cards.' . $card['title'])}}" class="w-100">
              <a href="{{route($card['routeName'])}}" class="btn btn-themed mt-3 mt-lg-0">{{ __('Scopri di più')}}
                <x-svg-icon icon="VectorArrow"></x-svg-icon>
              </a>
            </x-service-card>
          </div>
        @endforeach
      </div>
    </x-slot:cards>

    <div class="mb-4 mb-lg-5">
      <h2
          class=" position-relative z-index1 d-flex d-lg-block flex-column align-items-center text-center text-lg-start text-uppercase">
        {!! __('I nostri <span class="wab-highlight">servizi:</span> il tuo <span class="wab-highlight">successo</span>
        online.')!!}
      </h2>
    </div>
    <div>
      <div class="d-flex flex-column flex-lg-row align-items-center">
        <hr class="w-25 opacity-100">
        <p class="lead ms-0 ms-lg-2 mb-5 mb-lg-0">{{ __('Ecco cosa possiamo offrirti')}}</p>
      </div>
    </div>
  </x-services>

  <x-contact class="mt-4" theme="yellow">
    <x-slot:reverse>
      btn-hover
    </x-slot:reverse>
  </x-contact>

  <x-accordion :entries="$accordionWhyUs" theme="light">
    <x-slot:reverseOrNot>flex-lg-row</x-slot:reverseOrNot>
    {!! __('SCEGLI <span class="wab-highlight text-break">NOI,</span> SENZA ESITARE')!!}
    <x-slot:small_text>{!! __('ECCO PERCHE’ SCEGLIERE NOI, E’ UNA <br><span class="wab-highlight">
      DECISIONE FACILE')!!}</span></x-slot:small_text>
</x-accordion>

@endsection
