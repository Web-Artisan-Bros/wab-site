@extends('./layouts/public')

@php
$theme = "light";
$navbarVariant = "white";
$footerVariant = "white";

$pageTitle = trans('menu_dropdown.Trasformazioni Digitale');
@endphp

@section ('content')

<x-jumbo dnone="true" reverseJumbo="flex-lg-row-reverse" theme="light" reverse>

  <x-slot:text>
    <div class="mb-3 mb-lg-5">
      <h1 class="text-break text-wrap">{!! __('IL <span class="wab-highlight">FUTURO</span> È DIGITALE, NOI TI AIUTIAMO
        AD
        <span class="wab-highlight text-break text-wrap">ARRIVARCI')!!}</span>
      </h1>
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
      <x-neon-graphic text="Future"></x-neon-graphic>
    </div>

  </x-slot:jumboImg>
</x-jumbo>


<section class="themed-section info-section" data-bs-theme="dark">
  <div class="container container-p-156">
    <div class="row gap-5">
      <div class="col">
        <p class="">{!! __('Immagina di essere <span class="wab-highlight">un&acute;impresa</span> <span
            class="wab-highlight">tradizionale</span> che vuole abbracciare la <span
            class="wab-highlight">trasformazione</span>
          <span class="wab-highlight">digitale</span> ma non sa da dove cominciare. Noi possiamo aiutarti a passare dal
          tempo dei dinosauri all&acute;era
          digitale, senza dover fare un salto nel futuro come Marty McFly in Ritorno al futuro!')!!}
        </p>
        <p class="">{!! __('La trasformazione digitale riguarda l&acute;adozione di <span
            class="wab-highlight">tecnologie</span> <span class="wab-highlight">digitali</span> in tutti gli aspetti
          dell&acute;azienda,
          dalla <span class="wab-highlight">comunicazione</span> <span class="wab-highlight">con</span> <span
            class="wab-highlight">i</span> <span class="wab-highlight">clienti</span> <span
            class="wab-highlight">all&acute;organizzazione</span> interna del lavoro. Il nostro servizio di trasformazione
          digitale ti aiuterà a capire come implementare queste tecnologie nel modo giusto e a creare un piano d&acute;azione
          su misura per la tua attività.
          Ciò può significare l&acute;integrazione di <span class="wab-highlight">software</span> <span
            class="wab-highlight">personalizzato</span> per la gestione dei processi aziendali, la
          creazione di una <span class="wab-highlight">presenza</span> <span class="wab-highlight">online</span>
          efficace tramite un sito web o l&acute;adozione di strumenti di <span class="wab-highlight">marketing</span> <span
            class="wab-highlight">digitale</span>
          come l&acute;e-mail marketing o i social media.')!!}</p>
        <p class="">{!! __('In ogni caso, lavoriamo insieme per creare un <span class="wab-highlight">ambiente</span> <span class="wab-highlight">digitale</span> che ti permetta di risparmiare tempo e di avere maggiori opportunità di crescita. E non preoccuparti se non sei un esperto tecnologico. Noi ci occuperemo di tutto, dall&acute;analisi delle tue esigenze e delle tue risorse, alla creazione di un piano su misura, alla realizzazione di tutti gli strumenti necessari, alla formazione del personale, fino alla consulenza a lungo termine. Siamo come una <span class="wab-highlight">guida</span> <span class="wab-highlight">turistica</span> digitale, pronti a mostrarti tutte le meraviglie che il mondo digitale ha da offrire e a portarti verso il successo!')!!}</p>
      </div>
      <div class="col d-flex flex-column justify-content-between text-end">
        <h2 class="text-center text-lg-end">{!! __('LA TUA <span class="wab-highlight">AZIENDA</span> VERSO IL <span
            class="wab-highlight">FUTURO</span>
          DIGITALE')!!}</h2>
        <x-svg-icon class="d-none d-lg-inline-block arrowLeft mt-auto mb-5" id="arrow" icon="arrow_outline"></x-svg-icon>
        <div>
          <p class="lead text-center text-lg-end">{!! __('Non c&acute;è <span
              class="wab-highlight">trasformazione</span> <span class="wab-highlight">digitale</span> troppo grande o
            troppo piccola per noi!')!!}</p>
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

    <div class="accordion accordion-flush mt-5 themed-section d-block d-lg-none" id="cardsServices"
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
          aria-labelledby="{{ 'acc_head_' . $entry['id'].'0' }}" data-bs-parent="#cardsServices">
          <div class="accordion-body d-flex text-break">
            {{ trans('cards.' . $entry['content'])}}
          </div>
        </div>
      </div>
      @endforeach

    </div>


  </x-slot:cards>

  <div class="mb-5 text-center text-lg-start">
    <h2 class="position-relative z-index1 mb-4 text-uppercase">{!! __('ABBIAMO RACCOLTO LE <span
        class="wab-highlight">DOMANDE</span> PIÙ <span class="wab-highlight">FREQUENTI,</span> PER AIUTARTI
      MEGLIO')!!}</span>
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

  {!! __('PORTIAMO LA TUA AZIENDA NEL <span class="wab-highlight">FUTURO')!!}</span>
  <x-slot:small_text>
    {!! __('Scopri come si svolge la <span class="wab-highlight">trasformazione</span> <span
      class="wab-highlight">digitale</span> in 4 fasi:')!!}
  </x-slot:small_text>
</x-diagonalAccordion>

@endsection
