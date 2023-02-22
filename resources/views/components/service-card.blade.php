<div class="card card-flat service-card">
    <div class="card-header d-none d-sm-block">
        <h4 class="text-end">{{ $number }}</h4>
    </div>
    <div class="card-body text-center py-3 d-flex flex-column">
        <h5 class="card-title flex-fill mb-4">{{ $title }}</h5>
        {{$slot}}
    </div>
</div>
