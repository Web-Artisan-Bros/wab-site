@props(['class' =>'', 'dnone' => '', 'reverseJumbo' =>''])


@if ($dnone === "true")

<div class="wab-jumbo themed-section" {{ $dnone }} data-bs-theme="{{$theme}}">
  <div class="container container-p-156">
    <div class="row {{$reverseJumbo}} pb-sm-3 justify-content-center flex-column">
      <div class="col d-none d-lg-block">
        <div class="ps-3">
          <x-square-btn reverse="{{$reverse}}">
          </x-square-btn>
        </div>
      </div>
      <div class="col text-center text-lg-start">
        {{$text}}
      </div>
      <button
        class="align-self-center w-50 btn  mt-4 {{ $theme === 'yellow' ? 'btn-primary' : 'btn-' . $theme }} d-block d-lg-none"
        type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        SCRIVICI
        <x-svg-icon icon="VectorArrow"></x-svg-icon>
      </button>
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
          <x-square-btn reverse="{{$reverse}}">
          </x-square-btn>
        </div>
      </div>
      <button
        class="align-self-center w-50 btn  mt-4 {{ $theme === 'yellow' ? 'btn-primary' : 'btn-' . $theme }} d-block d-lg-none"
        type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        SCRIVICI
        <x-svg-icon icon="VectorArrow"></x-svg-icon>
      </button>
      <div class="col">

        {{$jumboImg}}

      </div>
    </div>

  </div>
</div>
@endif