@props(['class' =>'', 'dnone' => '', 'reverseJumbo' =>''])


@if ($dnone === "true")

<div class="wab-jumbo themed-section" {{ $dnone }} data-bs-theme="{{$theme}}">
  <div class="container container-p-156">
    <div class="row {{$reverseJumbo}} pb-sm-3 justify-content-center flex-column flex-nowrap">
      <div class="col d-none d-lg-block">
        <div class="ps-3">
          <x-contact-btn reverse="{{$reverse}}"></x-contact-btn>
        </div>
      </div>

      <div class="col text-center text-lg-start">
        {{$text}}
      </div>

      <x-contact-btn version="small" class="align-self-center w-50 mt-4 d-lg-none"></x-contact-btn>
    </div>
    <div class="pt-5 position-relative">
      {{$jumboImg}}
    </div>
  </div>
</div>

@else

<div class="{{ $class }} wab-jumbo themed-section" data-bs-theme="{{$theme}}">
  <div class="container container-p-156">
    <div class="row {{$reverseJumbo}} pb-sm-5 flex-lg-row flex-column align-items-center">
      <div class="col  text-center text-lg-start">
        {{$text}}
        <div class="ps-3 mt-5 pt-5   d-none d-lg-block">
          <x-contact-btn reverse="{{$reverse}}"></x-contact-btn>
        </div>
      </div>

      <x-contact-btn version="small" class="align-self-center w-50 mt-4 d-lg-none"></x-contact-btn>

      <div class="col">
        {{$jumboImg}}
      </div>
    </div>

  </div>
</div>
@endif
