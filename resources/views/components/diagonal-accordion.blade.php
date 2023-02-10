<section class="themed-section" data-bs-theme="{{$theme}}">
    <div class="container container-p-156 overflow-hidden">
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <h2 class="">ECCO IL NOSTRO PROCESSO <span class="wab-highlight">ARTIGIANALE</span></h2>
                <div class="d-flex flex-row-reverse align-items-center">
                    <p class="lead ps-3">soluzioni personalizzate e artigianali per ogni cliente. esperienza e tecnologie all'avanguardia.</p>
                    <hr class="w-25 opacity-100 primary-hr">
                </div>
            </div>
        </div>

        <div class="wabDa">
            <div class="d-flex row">
                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach($entries as $entry)
                    <button class="nav-link" id="v-pillss-{{ $entry['id'] }}-tab" data-bs-toggle="pill" data-bs-target="#v-pillss-{{ $entry['id'] }}" type="button" role="tab" aria-controls="v-pills-{{ $entry['id'] }}" aria-selected="true">
                        <div class="position-relative w-100">
                            <div class="positioning">
                                <div class="text">
                                    <div class="number">{{ $entry["num"] }}.</div>
                                    <div class="fs-4">{{ strtoupper($entry["title"]) }}</div>
                                </div>
                                <x-svg-icon class="arrow ms-3" icon="VectorArrowWhiteD"></x-svg-icon>
                            </div>
                        </div>
                    </button>
                    @endforeach
                </div>
            </div>
            <div class="tab-content row" id="v-pills-tabContent">
                @foreach($entries as $entry)
                <div class="tab-pane fade" id="v-pillss-{{ $entry['id'] }}" role="tabpanel" aria-labelledby="v-pillss-{{ $entry['id'] }}-tab" tabindex="0">
                    <div class="d-flex flex-column mb-3">
                        <div class="number fs-4 text-primary">{{ $entry["num"] }}.</div>
                        <div class="fs-4 text-primary">{{ strtoupper($entry["title"]) }}</div>
                    </div>
                    {{ $entry['content'] }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>