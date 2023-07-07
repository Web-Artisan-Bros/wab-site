@extends('./layouts/public')

@php
$theme = "light";
$navbarVariant = "white";
$footerVariant = "white";

$pageTitle = trans('menu_dropdown.Sviluppo Software');
@endphp

@section ('content')

<x-jumbo dnone="true" reverseJumbo="flex-lg-row-reverse" theme="light" reverse>

  <x-slot:text>
    <div class="mb-3 mb-lg-5">
      <h1 class="text-uppercase text-break">{!! __('REALIZZIAMO <span class="wab-highlight">SOFTWARE</span> SU <span class="wab-highlight">MISURA</span> PER TE')!!}</h1>
    </div>
    <div>
      <div class="d-flex  flex-lg-row flex-column align-items-center">
        <p class="lead">{!! __('Realizziamo la tua presenza online con <span class="wab-highlight">passione</span> e
          professionalità.')!!}</p>
        <hr class="w-25 opacity-100 d-none d-lg-block">
      </div>
    </div>
  </x-slot:text>
  <x-slot:jumboImg class="">
    <div class="pt-5 position-relative">
      <x-neon-graphic text="Software"></x-neon-graphic>
    </div>

  </x-slot:jumboImg>
</x-jumbo>

<section class="themed-section info-section" data-bs-theme="dark">
  <div class="container container-p-156">
    <div class="row gap-5">
      <div class="col">
        <p class="">{!! __('Il servizio di <span class="wab-highlight">sviluppo</span> <span class="wab-highlight">software</span> <span class="wab-highlight">personalizzato</span> è
          come la confezione di un vestito su misura, fatta apposta per te. Invece di scegliere un software preconfezionato che potrebbe non soddisfare tutte le tue esigenze, noi creiamo un software appositamente per te, tenendo conto di ogni <span class="wab-highlight">dettaglio</span> e delle tue specifiche
          richieste. È come avere un abito cucito <span class="wab-highlight">su</span> <span class="wab-highlight">misura</span> per la tua azienda, che si adatta perfettamente a tutte le
          tue esigenze e ti fa risplendere in ogni occasione.')!!}</p>
        <p class="">{!! __('Immagina che hai un&acute;idea per un&acute;applicazione fantastica ma non sai da dove iniziare. Ecco
          dove entra in
          gioco il nostro servizio di sviluppo software personalizzato! Il nostro team di sviluppatori esperti lavora
          alacremente per creare un software su misura per le tue <span class="wab-highlight">esigenze</span> <span class="wab-highlight">specifiche</span>.
          In pratica, ti <span class="wab-highlight">ascoltiamo</span> <span class="wab-highlight">attentamente</span> per capire ciò che desideri e poi lavoriamo con te per creare un
          software che soddisfi tutte le tue esigenze. Ti teniamo <span class="wab-highlight">aggiornato</span> durante tutto il processo, perché vogliamo
          che tu sia <span class="wab-highlight">coinvolto</span> e felice del <span class="wab-highlight">prodotto</span> <span class="wab-highlight">finale</span>.')!!}</p>
        <p class="">{!! __('E non preoccuparti se non sei un esperto in informatica, noi <span class="wab-highlight">ci</span> <span class="wab-highlight">occupiamo</span> <span class="wab-highlight">di</span> <span class="wab-highlight">tutto</span> per
          te!')!!}</p>
      </div>
      <div class="col d-flex flex-column justify-content-between text-end">
        <h2 class="text-center text-lg-end">{!! __('IL <span class="wab-highlight">SOFTWARE</span> SU MISURA PER IL TUO
          BUSINESS')!!}</h2>
        <x-svg-icon class="d-none d-lg-inline-block arrowLeft mt-auto mb-5" id="arrow" icon="arrow_outline"></x-svg-icon>
        <div>
          <p class="lead text-center text-lg-end">{!! __('Non è <span class="wab-highlight">magia,</span> è solo il
            nostro software!')!!}</p>
          <hr class="opacity-100 d-none d-lg-block">
        </div>

      </div>
    </div>
  </div>
</section>

<x-services img="/assets/JumboService01.png" :cards="$cardsServices">
  <x-slot:cards>
    <div class="services pt-3 d-none d-lg-block">
      <div class="d-flex align-content-center">
        <div class="wrapper">
          <div class="arrowM">
            <x-svg-icon icon="arrow_outline"></x-svg-icon>
          </div>
        </div>



        <div class="tab-content row ps-5 ms-1" id="v-pills-tabContent">
          @foreach($cardsServices as $entry)
          <div class="tab-pane fade" id="v-pills-{{ $entry['id'] }}" role="tabpanel"
            aria-labelledby="v-pills-{{ $entry['id'] }}-tab" tabindex="0">
            <div class="fs-4 text-primary mb-3">{{ $entry["num"] }}. {{ trans('cards.' . strtoupper($entry["title"]))}}
            </div>
            {{ trans('cards.' . $entry['content']) }}
          </div>
          @endforeach
        </div>
      </div>
      <div class="row justify-center">
        <div class="nav nav-pills " id="v-pills-tab" role="tablist" aria-orientation="orizontal">
          @foreach($cardsServices as $entry)
          <button class="nav-link col" id="v-pills-{{ $entry['id'] }}-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-{{ $entry['id'] }}" type="button" role="tab"
            aria-controls="v-pills-{{ $entry['id'] }}" aria-selected="true">
            <div class="card h-100 service-card">
              <div class="card-header">
                <h4 class="text-dark text-end">{{ $entry["num"] }}.</h4>
              </div>
              <div class="card-body">
                <h5 class="card-title text-start h-100">{{ trans('cards.' . strtoupper($entry["title"])) }}</h5>
              </div>
            </div>
          </button>
          @endforeach
        </div>
      </div>
    </div>

    <div class="accordion accordion-flush mt-5 themed-section d-block d-lg-none" id="accordionWhyUs"
      data-bs-theme="{{ $theme }}">

      @foreach ($cardsServices as $entry)
      <div class="accordion-item d-flex flex-column">
        <h2 class="accordion-header" id="{{ 'acc_head_' . $entry['id'].'0' }}">
          <button class="accordion-button collapsed ps-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#{{ 'acc_body_' . $entry['id'].'0' }}" aria-expanded="false"
            aria-controls="{{ 'acc_body_' . $entry['id'].'0' }}">

            <div class="text">
              <x-svg-icon class="arrow" icon="arrow_square"></x-svg-icon>
              <div class="fs-6">{{ $entry['num'] }}.</div>
              <div class="fs-6">{{ trans('cards.' . strtoupper($entry["title"]))}}</div>
            </div>
          </button>
        </h2>

        <div id="{{ 'acc_body_' . $entry['id'].'0' }}" class="accordion-collapse collapse"
          aria-labelledby="{{ 'acc_head_' . $entry['id'].'0' }}" data-bs-parent="#accordionWhyUs">
          <div class="accordion-body d-flex text-break">
            {{ trans('cards.' . $entry['content'])}}
          </div>
        </div>
      </div>
      @endforeach

    </div>


  </x-slot:cards>

  <div class="mb-5 text-center text-lg-start">
    <h2 class="position-relative z-index1 mb-4 text-uppercase">{!! __('TUTTO CIÒ CHE DEVI <span
        class="wab-highlight">SAPERE,</span> <span class="wab-highlight">A</span> <span
        class="wab-highlight">PORTATA</span> DI CLICK')!!}</span>
  </div>
  <div>
    <div class="d-flex flex-column flex-lg-row align-items-center">
      <hr class="w-25 opacity-100">
      <p class="lead ms-2">{{ __('Ecco alcune domande frequenti')}}</p>
    </div>
  </div>


</x-services>

<x-contact class="mt-4" theme="yellow">
</x-contact>


<x-diagonalAccordion :entries="$accordionOurProcess" theme="dark">
  {!! __('IL <span class="wab-highlight">FUTURO</span> A PORTATA DI <span class="wab-highlight">SOFTWARE')!!}</span>
  <x-slot:small_text>
    {!! __('Dall&acute;<span class="wab-highlight">idea</span> alla <span class="wab-highlight">realtà</span> in pochi
    step:')!!}
  </x-slot:small_text>
</x-diagonalAccordion>

@endsection
