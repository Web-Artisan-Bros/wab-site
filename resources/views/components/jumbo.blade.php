@props(['class' =>'', 'dnone' => '', 'reverseJumbo' =>''])


@if ($dnone === "true")

<div class="{{ $class }} wab-jumbo" {{ $dnone }}>
  <div class="container container-p-156">
    <div class="row {{$reverseJumbo}} pb-sm-5">
      <div class="col">
        <div class="ps-3">
          <x-square-btn textBorderColor="{{$textBorderColor}}" reverse="{{$reverse}}">
            {{$imgCenter}}
          </x-square-btn>
        </div>
      </div>
      <div class="col">
        {{$text}}
      </div>
    </div>
    <div class="pt-5 position-relative">
      {{$jumboImg}}
    </div>
  </div>
</div>

@else

<div class="{{ $class }} wab-jumbo">
  <div class="container container-p-156">
    <div class="row {{$reverseJumbo}} pb-sm-5">
      <div class="col">
        {{$text}}
        <div class="ps-3 mt-5 pt-5">
          <x-square-btn textBorderColor="{{$textBorderColor}}" reverse="{{$reverse}}">
            {{$imgCenter}}
          </x-square-btn>
        </div>
      </div>
      <div class="col">

        {{$jumboImg}}

      </div>
    </div>

  </div>
</div>
@endif