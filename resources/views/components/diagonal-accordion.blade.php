<div class="wabDa">
    <div class="d-flex row">
        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @foreach($entries as $entry)
            <button class="nav-link" id="v-pills-{{ $entry['id'] }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $entry['id'] }}" type="button" role="tab" aria-controls="v-pills-{{ $entry['id'] }}" aria-selected="true">
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
        <div class="tab-pane fade" id="v-pills-{{ $entry['id'] }}" role="tabpanel" aria-labelledby="v-pills-{{ $entry['id'] }}-tab" tabindex="0">
            <div class="d-flex flex-column mb-3">
                <div class="number fs-4 text-primary">{{ $entry["num"] }}.</div>
                <div class="fs-4 text-primary">{{ strtoupper($entry["title"]) }}</div>
            </div>
            {{ $entry['content'] }}
        </div>
        @endforeach
    </div>
</div>