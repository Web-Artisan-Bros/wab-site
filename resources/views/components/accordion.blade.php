@props(['class' => ''])

<section class="themed-section" data-bs-theme="{{ $theme }}">
    <div class="container container-p-156 wab-accordion">
        <div class="row align-items-lg-end pb-3 flex-column flex-lg-row align-items-center">
            <div class="col-lg-5 col text-center text-lg-start">
                <h2 class="position-relative z-index1">
                    <span class="wab-highlight text-break">
                        COSTRUIAMO</span> <span>SITI WEB</span>
                </h2>
            </div>

            <div class="col-lg-2 col-6">
                <hr class="opacity-100 pb-4">
            </div>

            <div class="col-lg-5 col text-center text-lg-start">
                <p class="lead position-relative z-index1">ECCO PERCHE’ SCEGLIERE NOI, E’ UNA <br><span
                        class="wab-highlight">
                        DECISIONE FACILE</span>:</p>
            </div>
        </div>

        <div class="accordion accordion-flush mt-5 themed-section" id="accordionWhyUs"
            data-bs-theme="{{ $theme }}">

            @foreach ($entries as $entry)
                <div class="accordion-item d-flex flex-column">
                    <h2 class="accordion-header" id="{{ 'acc_head_' . $entry['id'] }}">
                        <button class="accordion-button collapsed ps-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#{{ 'acc_body_' . $entry['id'] }}" aria-expanded="false"
                            aria-controls="{{ 'acc_body_' . $entry['id'] }}">

                            <div class="text">
                                <x-svg-icon class="arrow" icon="BorderedArrow"></x-svg-icon>
                                <div>{{ $entry['num'] }}.</div>
                                <div class="fs-4">{{ strtoupper($entry['title']) }}</div>
                            </div>
                        </button>
                    </h2>

                    <div id="{{ 'acc_body_' . $entry['id'] }}" class="accordion-collapse collapse"
                        aria-labelledby="{{ 'acc_head_' . $entry['id'] }}" data-bs-parent="#accordionWhyUs">
                        <div class="accordion-body d-flex text-break">
                            il nostro team vanta anni di esperienza nel settore e un team
                            altamente qualificato, garantendo risultati di alta qualità.
                            <img class="cup d-none d-lg-block" src="/assets/CoffeeMug.svg" alt="">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>