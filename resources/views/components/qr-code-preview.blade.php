<div>
  @if($value)
    {!! QrCode::size($size)->generate($value) !!}
  @endif
</div>
