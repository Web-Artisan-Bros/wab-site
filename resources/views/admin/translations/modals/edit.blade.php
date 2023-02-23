@extends('layouts.app')

@section('title', "Translation #$translation->id | Edit")

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <a href="{{ route('admin.translations.index') }}" class="btn btn-link btn-sm me-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="1em" height="1em">
            <path fill="currentColor"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
          </svg>
        </a>
        Translation #{{ $translation->id }} | Edit
      </div>

      <div class="card-body">

        <form action="{{ route('admin.translations.update', $translation->id) }}" method="POST"
              enctype="multipart/form-data">
          @csrf()
          @method('PUT')

          <div class="mb-3">
            <label class="form-label" for="input_group">Group</label>
            <input type="text"
                   class="form-control @error('group') is-invalid @enderror"
                   name="group"
                   id="input_group"
                   value="{{ old('group', $translation->group) }}">
            @error('group')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="input_key">Key</label>
            <textarea type="text"
                   class="form-control @error('key') is-invalid @enderror"
                   name="key"
                   id="input_key"
                   cols="30" rows="5"
                   >{{ old('key', $translation->key) }}</textarea>
            @error('key')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="input_text">Text</label>
            <input type="text"
                   class="form-control @error('text') is-invalid @enderror"
                   name="text"
                   id="input_text"
                   value="{{ old('text', $translation->text) }}">
            @error('text')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <a href="{{ route('admin.translations.index') }}" class="btn btn-secondary">Cancel</a>
          <button class="btn btn-success">Save</button>
        </form>

      </div>
    </div>
  </div>

@endsection
