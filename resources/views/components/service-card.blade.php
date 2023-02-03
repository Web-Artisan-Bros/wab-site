<div class="card h-100 service-card">
    <div class="border-bottom border-3 border-primary">
        <h4 class="text-dark text-end">{{ $number }}</h4>
    </div>
    <div class="card-body">
        <h5 class="card-title h-100">{{ $title }}</h5>
        {{$slot}}
    </div>
</div>