@foreach($groups as $group)
  <div class="row">

    @foreach($group as $field)
      @php
        $id = $getId($field['name']);
        $name = $getName($field['name']);
        $path = $getPath($field['name']);
        $defaultValue = $field['default'] ?? null;

        $value = old($path, $values[$field['name']] ?? $defaultValue);
      @endphp

      <div class="col">
        <div class="mb-3">
          <label class="form-label" for="{{ $id }}">{{ $field['label'] }}</label>

          @php
            $type = $field['type'];
          @endphp

          @switch($type)
            @case("select")
              <select class="form-select @error($path)is-invalid @enderror"
                      name="{{$name}}"
                      id="{{$id}}">

                @foreach($field['options'] ?? [] as $entry)
                  @php
                    $valueKey = $entry['optionsValueKey'] ?? 'value';
                    $labelKey = $entry['optionsLabelKey'] ?? 'label';
                    $optionValue = $entry[$valueKey] ?? '';
                    $optionLabel = $entry[$labelKey] ?? '';

                    $toSelect = $value; //old('qr_type_id', $qr?->qr_type_id);
                  @endphp

                  <option value="{{$optionValue}}" {{ $optionValue === $toSelect ? 'selected': null }}>
                    {{$optionLabel}}
                  </option>
                @endforeach
              </select>
              @break
            @case ("file")
              <div class="d-flex gap-3 align-items-start">
                @if($value)
                  <img src="data:image/png;base64, {{  base64_encode(Storage::get($value)) }}"
                       style="width: 150px"
                       class="img-thumbnail">
                @endif

                <input type="{{ $type === 'color' ? 'text' : $type }}" placeholder="{{ $field['placeholder'] }}"
                       class="form-control @error($path)is-invalid @enderror"
                       {{ $type === 'color' ? 'data-jscolor="{}"' : null  }}
                       name="{{ $name }}"
                       id="{{ $id }}"
                    {!! $attributes->merge($field["inputOptions"]) !!}>
              </div>
              @break
            @default
              <input type="{{ $type === 'color' ? 'text' : $type }}" placeholder="{{ $field['placeholder'] }}"
                     class="form-control @error($path)is-invalid @enderror"
                     {{ $type === 'color' ? 'data-jscolor="{}"' : null  }}
                     name="{{ $name }}"
                     id="{{ $id }}"
                     value="{{$value}}">
          @endswitch

          @error($path)
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
    @endforeach
  </div>
@endforeach

