<div class="card card-flat h-100 service-card">
    <div class="card-header">
        <h4 class="text-end">{{ $number }}</h4>
    </div>
    <div class="card-body text-center pb-3">
        <h5 class="card-title h-100">{{ $title }}</h5>
        {{$slot}}
    </div>
</div>
