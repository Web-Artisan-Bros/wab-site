<div class="d-flex justify-content-center gap-3">
  @if($value)

    <div class="qrcode-frame">
      {!! $formats["svg"] !!}

      <a class="qrcode-label btn btn-outline-primary btn-sm" href="{{ $formats["svg64"] }}" download>SVG
        <x-svg-icon icon="icons/download"/>
      </a>
    </div>

    <div class="qrcode-frame">
      <img src="{!! $formats["png64"] !!} ">

      <a class="qrcode-label btn btn-outline-primary btn-sm" href="{{ $formats["png64"] }}" download>PNG
        <x-svg-icon icon="icons/download"/>
      </a>
    </div>

  @endif
</div>
