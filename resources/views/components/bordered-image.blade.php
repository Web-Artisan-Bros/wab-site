{{--<img class="w-100 img-border" src="/assets/JumboHomeBorder.png" alt="a yellow border of the img">--}}

<div {{ $attributes->merge(['class' => 'bordered-image']) }}>
  <div class="img-outline" style="--mask-image: url({{url($src)}})">
    <div class="img-outline-inner"></div>
  </div>

  <img class="{{ $imgClass }}" src="{{ $src }}" alt="{{ $alt }}">

</div>
