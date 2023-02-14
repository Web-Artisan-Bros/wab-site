<section class="themed-section" data-bs-theme="{{ $theme }}">
    <div class="container container-p-156 overflow-hidden wab-accordion">
        <div class="row">
            <div class="col-lg"></div>
            <div class="col-lg-5 col text-center text-lg-start">
                <h2 class="">ECCO IL NOSTRO PROCESSO <span class="wab-highlight">ARTIGIANALE</span></h2>
                <div class="d-flex flex-lg-row-reverse flex-column align-items-center">
                    <p class="lead ps-3">soluzioni personalizzate e artigianali per ogni cliente. esperienza e tecnologie
                        all'avanguardia.</p>
                    <hr class="w-25 opacity-100 primary-hr">
                </div>
            </div>
        </div>

        <div class="wabDa d-none d-lg-block">
            <div class="d-flex row">
                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach ($entries as $entry)
                        <button class="nav-link" id="v-pillss-{{ $entry['id'] }}-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pillss-{{ $entry['id'] }}" type="button" role="tab"
                            aria-controls="v-pills-{{ $entry['id'] }}" aria-selected="true">
                            <div class="position-relative w-100">
                                <div class="positioning">
                                    <div class="text">
                                        <div class="number">{{ $entry['num'] }}.</div>
                                        <div class="fs-4">{{ strtoupper($entry['title']) }}</div>
                                    </div>
                                    <x-svg-icon class="arrow ms-3" icon="VectorArrowWhiteD"></x-svg-icon>
                                </div>
                            </div>
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="tab-content row" id="v-pills-tabContent">
                @foreach ($entries as $entry)
                    <div class="tab-pane fade" id="v-pillss-{{ $entry['id'] }}" role="tabpanel"
                        aria-labelledby="v-pillss-{{ $entry['id'] }}-tab" tabindex="0">
                        <div class="d-flex flex-column mb-3">
                            <div class="number fs-4 text-primary">{{ $entry['num'] }}.</div>
                            <div class="fs-4 text-primary">{{ strtoupper($entry['title']) }}</div>
                        </div>
                        {{ $entry['content'] }}
                    </div>
                @endforeach
            </div>
        </div>


        <div class="accordion accordion-flush mt-5 themed-section d-block d-lg-none" id="accordionWhyUs"
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