<section class="bg-light text-dark">
  <div class="container container-p-156">
    <div class="row align-items-end pb-3">
      <div class="col-5">
        <h2 class="position-relative z-index1">
                    <span class="wab-highlight text-dark">
                        SCEGLI NOI</span> <span class="text-dark"> SENZA ESITARE</span>
        </h2>
      </div>

      <div class="col-2">
        <hr class="opacity-100 pb-4">
      </div>

      <div class="col-5">
        <p class="lead position-relative z-index1">ECCO PERCHE’ SCEGLIERE NOI, E’ UNA <br><span
              class="wab-highlight">
                        DECISIONE FACILE</span>:</p>
      </div>
    </div>

    <div class="accordion accordion-flush mt-5 wab-accordion" id="accordionWhyUs">

      @foreach($entries as $entry)
        <div class="accordion-item d-flex flex-column">
          <h2 class="accordion-header" id="{{ 'acc_head_' . $entry['id'] }}">
            <button class="accordion-button collapsed ps-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#{{ 'acc_body_' . $entry['id'] }}" aria-expanded="false"
                    aria-controls="{{ 'acc_body_' . $entry['id'] }}">

              <div class="text">
                <x-svg-icon class="arrow" icon="BorderedArrow"></x-svg-icon>

                <div>{{ $entry["num"] }}.</div>
                <div class="fs-4">{{ strtoupper($entry["title"]) }}</div>
              </div>
            </button>
          </h2>

          <div id="{{ 'acc_body_' . $entry['id'] }}" class="accordion-collapse collapse"
               aria-labelledby="{{ 'acc_head_' . $entry['id'] }}"
               data-bs-parent="#accordionWhyUs">
            <div class="accordion-body d-flex text-break">
              il nostro team vanta anni di esperienza nel settore e un team
              altamente qualificato, garantendo risultati di alta qualità.
              <img class="cup" src="/assets/CoffeeMug.svg" alt="">
            </div>

          </div>
        </div>
      @endforeach
      {{--
      <div class="accordion-item d-flex flex-column">
        <h2 class="accordion-header d-flex py-4" id="flush-headingTwo">
          <button class="accordion-button collapsed py-0 ps-0" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            <img class="arrow me-3" src="/assets/BorderedArrow.svg" alt="">
            <span>02.<br>
                        METODO ARTIGIANALE
                    </span>
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
             data-bs-parent="#accordionWhyUs">
          <div class="accordion-body d-flex text-break">il nostro team vanta anni di esperienza nel settore e un team
            altamente qualificato, garantendo risultati di alta qualità.<img class="cup" src="/assets/CoffeeMug.svg"
                                                                             alt=""></div>

        </div>
      </div>
      <div class="accordion-item d-flex flex-column">
        <h2 class="accordion-header d-flex py-4" id="flush-headingThree">
          <button class="accordion-button collapsed py-0 ps-0" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            <img class="arrow me-3" src="/assets/BorderedArrow.svg" alt="">
            <span>03.<br>
                        AUMENTO DEI PROFITTI
                    </span>
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
             data-bs-parent="#accordionWhyUs">
          <div class="accordion-body d-flex text-break">il nostro team vanta anni di esperienza nel settore e un team
            altamente qualificato, garantendo risultati di alta qualità.<img class="cup" src="/assets/CoffeeMug.svg"
                                                                             alt=""></div>

        </div>
      </div>
      <div class="accordion-item d-flex flex-column">
        <h2 class="accordion-header d-flex py-4" id="flush-headingFour">
          <button class="accordion-button collapsed py-0 ps-0" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            <img class="arrow me-3" src="/assets/BorderedArrow.svg" alt="">
            <span>04.<br>
                        ASSISTENZA POST-LANCIO
                    </span>
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
             data-bs-parent="#accordionWhyUs">
          <div class="accordion-body d-flex text-break">il nostro team vanta anni di esperienza nel settore e un team
            altamente qualificato, garantendo risultati di alta qualità.<img class="cup" src="/assets/CoffeeMug.svg"
                                                                             alt=""></div>

        </div>
      </div>
      <div class="accordion-item d-flex flex-column">
        <h2 class="accordion-header d-flex py-4" id="flush-headingFive">

          <button class="accordion-button collapsed py-0 ps-0" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            <img class="arrow me-3" src="/assets/BorderedArrow.svg" alt="">
            <span>05.<br>
                        GIUSTO PREZZO
                    </span>
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
             data-bs-parent="#accordionWhyUs">
          <div class="accordion-body d-flex text-break">il nostro team vanta anni di esperienza nel settore e un team
            altamente qualificato, garantendo risultati di alta qualità.<img class="cup" src="/assets/CoffeeMug.svg"
                                                                             alt=""></div>

        </div>
      </div>--}}
    </div>
  </div>
</section>
