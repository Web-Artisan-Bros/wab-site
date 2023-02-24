@extends('./layouts/public')

@php
$theme = "light";
$navbarVariant = "white";
$footerVariant = "white";

$pageTitle = "Servizi";
@endphp

@section ('content')

<x-jumbo dnone="false" reverseJumbo="" theme="light">
  <x-slot:reverse>
    btn-hover
  </x-slot:reverse>

  <x-slot:text>
    <div class="mb-3 mb-lg-5">
      <h1 class="text-uppercase">I nostri servizi: il <span class="wab-highlight">tuo</span> <span
          class="wab-highlight">successo</span> online</h1>
    </div>
    <div>
      <div class="d-flex  flex-lg-row flex-column align-items-center">
        <p class="lead">Realizziamo la tua presenza online con <span class="wab-highlight">passione</span> e
          professionalità.</p>
        <hr class="w-25 opacity-100 d-none d-lg-block">
      </div>
    </div>
  </x-slot:text>
  <x-slot:jumboImg class="wab-img">
    <div class="pt-5 position-relative d-flex wab-img">
      <x-bordered-image src="/assets/JumboServiziColor.png" alt="Welcome neon sign"></x-bordered-image>
    </div>

  </x-slot:jumboImg>
</x-jumbo>

<x-accordion :entries="$accordionWhyUs" theme="dark">
  <x-slot:reverseOrNot>flex-lg-row-reverse</x-slot:reverseOrNot>
  IL <span class="wab-highlight text-break">TUO</span> <span class="wab-highlight text-break">SITO</span>, LA <span class="wab-highlight text-break">TUA</span> <span class="wab-highlight text-break">IMMAGINE</span>
  <x-slot:small_text>Creiamo siti web <span class="wab-highlight">personalizzati,</span> <span class="wab-highlight">innovativi</span> e <span class="wab-highlight">all'avanguardia</span> per far crescere il tuo business</x-slot:small_text>
</x-accordion>

<x-services img="/assets/JumboService01.png" :cards="$cardsServices">
  <x-slot:cards>
    <div class="services pt-3 d-none d-lg-block">
      <div class="d-flex align-content-center">
        <div class="wrapper">
          <div class="arrowM">
            <img src="/assets/BigArrow.svg" alt="">
          </div>
        </div>



        <div class="tab-content row ps-5 ms-1" id="v-pills-tabContent">
          @foreach($cardsServices as $entry)
          <div class="tab-pane fade" id="v-pills-{{ $entry['id'] }}" role="tabpanel"
            aria-labelledby="v-pills-{{ $entry['id'] }}-tab" tabindex="{{ $entry['id'] }}">
            <div class="fs-4 text-primary mb-3">{{ $entry["num"] }}. {{ strtoupper($entry["title"]) }}</div>
            {{ $entry['content'] }}
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
                <h5 class="card-title text-start h-100">{{ strtoupper($entry["title"]) }}</h5>
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
              <x-svg-icon class="arrow" icon="BorderedArrow"></x-svg-icon>
              <div class="fs-6">{{ $entry['num'] }}.</div>
              <div class="fs-6">{{ strtoupper($entry['title']) }}</div>
            </div>
          </button>
        </h2>

        <div id="{{ 'acc_body_' . $entry['id'].'0' }}" class="accordion-collapse collapse"
          aria-labelledby="{{ 'acc_head_' . $entry['id'].'0' }}" data-bs-parent="#accordionWhyUs">
          <div class="accordion-body d-flex text-break">
            {{ $entry['content'] }}
            <img class="cup d-none d-lg-block" src="/assets/CoffeeMug.svg" alt="">
          </div>
        </div>
      </div>
      @endforeach

    </div>


  </x-slot:cards>

  <div class="mb-5 text-center text-lg-start">
    <h2 class="position-relative z-index1 mb-4 text-uppercase">Hai <span class="wab-highlight">domande?</span> Abbiamo le <span class="wab-highlight">risposte.</span>
  </div>
  <div>
    <div class="d-flex flex-column flex-lg-row align-items-center">
      <hr class="w-25 opacity-100">
      <p class="lead ms-2">Ecco alcune domande frequenti</p>
    </div>
  </div>


</x-services>

<x-contact class="mt-4" theme="yellow">
  <x-slot:reverse>
    btn-hover
  </x-slot:reverse>
  <x-slot:imgCenter>
    /assets/WhiteArrow.svg
  </x-slot:imgCenter>
</x-contact>


<x-diagonalAccordion :entries="$accordionOurProcess" theme="dark">
  Un lavoro <span class="wab-highlight">artigianale</span> su misura
    <x-slot:small_text>
      Creiamo <span class="wab-highlight">siti</span> <span class="wab-highlight">personalizzati</span> per ogni cliente, seguendo un processo artigianale che garantisce <span class="wab-highlight">l'originalità</span> e la qualità del risultato finale.
    </x-slot:small_text>
</x-diagonalAccordion>

<script>
  //Selecting the arrow div
  let arrow_ref = document.querySelectorAll(".arrowM");

  //mousemove for devices with mouse aand touchmove for touchcreen devices
  let events = ["mousemove", "touchmove"];

  //Check for touch screen
  function isTouchDevice() {
    try {
      document.createEvent("TouchEvent");
      return true;
    } catch (e) {
      return false;
    }
  }

  //Same function for both events
  events.forEach((eventType) => {
    document.body.addEventListener(eventType, (event) => {
      arrow_ref.forEach((arrowM) => {
        /* getBoundingClientRect() method returns the position relative to the viewport */
        let arrowX = arrowM.getBoundingClientRect().left + arrowM.clientWidth / 2;
        let arrowY = arrowM.getBoundingClientRect().top + arrowM.clientHeight / 2;

        /* ClientX and ClientY return the position of clients cursor from top left of the screen*/
        var x = !isTouchDevice() ? event.clientX : event.touches[0].clientX;
        var y = !isTouchDevice() ? event.clientY : event.touches[0].clientY;

        /*
        Subtract x position of mouse from x position of arrow and y position of mouse from y position of arrow.
        Use atan2(returns angle in radians)
        */

        let radian = Math.atan2(x - arrowX, y - arrowY);
        //Convert Radians to Degrees
        let rotationDegrees = radian * (180 / Math.PI) * -1 + 40;
        //Rotate the arrow
        arrowM.style.transform = "rotate(" + rotationDegrees + "deg)";
      });
    });
  });
</script>

@endsection