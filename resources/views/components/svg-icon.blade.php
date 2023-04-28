<i {{ $attributes->merge(['class' => 'icon', "style" => ($size ? "width:$size;height:$size" : '')]) }}>
  {!! $fileContent !!}
</i>
