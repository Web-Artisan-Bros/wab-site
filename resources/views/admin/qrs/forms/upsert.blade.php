@php
  if(!isset($qr)) {
    $qr = new \App\Models\Qr();

    $qr->type()->associate(\App\Models\QrType::where("name", "url")->first());
  }
@endphp
<script>
  function test () {
    console.log('clicaasdasasked')
  }
</script>
<form action="{{ $action }}"
      method="POST"
      enctype="multipart/form-data">
  @csrf()
  @method($method)

  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label class="form-label" for="input_slug">Slug</label>
        <input type="text"
               class="form-control"
               id="input_slug"
               name="slug"
               value="{{ $slug ?? $qr?->slug }}"
               readonly>
      </div>
    </div>
    <div class="col">
      <div class="mb-3" x-data="qr_type_select">
        <label class="form-label" for="input_qr_type_id">Type</label>

        <select type="text"
                class="form-select @error('qr_type_id') is-invalid @enderror"
                name="qr_type_id"
                id="input_qr_type_id"
                x-on:change="onTypeChange">
          @php
            $toSelect = old('qr_type_id', $qr?->qr_type_id);
          @endphp

          @foreach($qrTypes as $type)
            <option value="{{$type->id}}"
                {{ $type->id === $toSelect ? 'selected': null }}>
              {{$type->name}} ({{$type->description}})
            </option>
          @endforeach
        </select>

        @error('qr_type_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label class="form-label" for="input_title">Title</label>
        <input type="text"
               class="form-control @error('title') is-invalid @enderror"
               name="title"
               id="input_title"
               value="{{ old('title', $qr?->title) }}">
        @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label class="form-label" for="input_description">Description</label>
        <input type="text"
               class="form-control @error('description') is-invalid @enderror"
               name="description"
               id="input_description"
               value="{{ old('description', $qr?->description) }}">
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    </div>
  </div>

  <div id="qr_type_fields_container">
    @fragment("qr_type_fields")
      @if($qr->type)
        @foreach($qr->type?->fields as $field)
          <div class="mb-3">
            <label class="form-label" for="input_data_{{ $field->name }}">{{ $field->label }}</label>
            <input type="{{ $field->type }}" placeholder="{{ $field->placeholder }}"
                   class="form-control @error('data.' . $field->name)is-invalid @enderror"
                   name="data[{{ $field->name }}]" id="input_data_{{ $field->name }}"
                   value="{{ old('data.' . $field->name, $qr?->data["url"] ?? '')  }}">

            @error('data.' . $field->name)
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        @endforeach
      @endif
    @endfragment
  </div>

  <div class="d-flex gap-3 mt-4">
    <a href="{{ route('admin.qrs.index') }}" class="btn btn-secondary">Cancel</a>
    <button class="btn btn-success">Save</button>
  </div>
</form>

<script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('qr_type_select', () => ({
      onTypeChange (e) {
        const form = e.target.closest('form')
        const formData = new FormData(form)

        formData.delete('_method')

        axios.post("{{ route('admin.qrs.fields') }}", formData).then(response => {
          const fields = response.data
          const fragment = document.createRange().createContextualFragment(fields)
          const container = document.querySelector('#qr_type_fields_container')

          container.innerHTML = ''

          container.appendChild(fragment)
        }).catch(error => {
          console.error(error)
        })
      }
    }))
  })
</script>
