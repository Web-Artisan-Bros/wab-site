@if ($errors->any())
  <div {{ $attributes }} class="mb-4 alert alert-danger ">
    <div class="lead mb-3">{{ __('Whoops! Something went wrong.') }}</div>

    <ul class="list-group list-group-flush list-light d-inline-block">
      @foreach ($errors->all() as $error)
        <li class="list-group-item">{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
