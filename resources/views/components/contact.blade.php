<section class="themed-section" data-bs-theme="{{ $theme }}">
    <div class="container container-p-156 dark-text">
        <div class="row {{ $theme === 'light' ? 'flex-row-reverse' : '' }} text-lg-start text-center">
            <div class="col d-none d-lg-block">
                <div class="ps-3">
                    <x-contact-btn reverse="{{ $reverse }}" theme="{{ $theme }}"></x-contact-btn>
                </div>
            </div>
            <div class="col">
                <div class="mb-5 d-flex d-lg-block flex-column align-items-center ">
                    <h2 class="fs-3 f-spacing position-relative z-index1 ">La tua <span
                            class="wab-highlight">storia</span> attraverso
                        un sito che <br>parli di <span class="wab-highlight">
                            te</span></h2>
                    <hr class=" opacity-100 w-75" style="border-color:var(--accent-color)">
                </div>
                <div>
                    <div class="d-flex flex-column">
                        <p class="lead mb-5">
                            Qualsiasi cosa per aiutarti a definire la tua presenza online, trasformiamo
                            le tue idee e le tue necessità in un prodotto concreto!
                        </p>

                        <div class="row justify-content-lg-start justify-content-center">
                            <div class="col-md-8 col-12">
                                <x-contact-btn version="small" class="w-100"></x-contact-btn>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


</section>
