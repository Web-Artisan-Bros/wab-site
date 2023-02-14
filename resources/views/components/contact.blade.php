<section class="themed-section" data-bs-theme="{{ $theme }}">
    <div class="container container-p-156 dark-text">
        <div class="row {{ $theme === 'light' ? 'flex-row-reverse' : '' }} text-center">
            <div class="col d-none d-lg-block">
                <div class="ps-3">
                    <x-square-btn textBorderColor="bordeTextBlack" reverse="{{ $reverse }}"
                        theme="{{ $theme }}">
                    </x-square-btn>
                </div>
            </div>
            <div class="col">
                <div class="mb-5 d-flex d-lg-block flex-column align-items-center">
                    <h2 class="fs-3 f-spacing text-lg-start text-center position-relative z-index1 ">La tua <span
                            class="wab-highlight">storia</span> attraverso
                        un sito che <br>parli di <span class="wab-highlight">
                            te</span></h2>
                    <hr class=" opacity-100 w-75" style="border-color:var(--accent-color)">

                </div>
                <div>
                    <div class="d-flex flex-column ">
                        <p class="lead">Qualsiasi cosa per aiutarti a definire la tua presenza online, trasformiamo le
                            tue
                            idee e le tue necessità in un prodotto concreto!</p>
                        <button
                            class="align-self-center w-50 btn  mt-4 {{ $theme === 'yellow' ? 'btn-primary' : 'btn-' . $theme }} d-block d-lg-none"
                            type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            SCRIVICI
                            <x-svg-icon icon="VectorArrow"></x-svg-icon>
                        </button>
                    </div>


                </div>
            </div>

        </div>
    </div>


</section>
