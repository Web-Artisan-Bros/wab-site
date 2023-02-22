@props(['img', 'button'=>''])

<section class="themed-section" data-bs-theme="{{$theme}}">
  <div class="container container-p-156 wab-accordion">
    <div class="row pb-sm-5 flex-column flex-lg-row">
      <div class="col">
        {{$slot}}
      </div>

      <div class="col">
        <x-bordered-image img-class="img-small" src="{{ $img }}" alt="Welcome neon sign"></x-bordered-image>
      </div>
    </div>

    <div class="mt-5 mt-lg-0">
      {{$cards}}
    </div>
  </div>

</section>
