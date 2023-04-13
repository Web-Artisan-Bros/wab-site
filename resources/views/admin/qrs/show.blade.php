@extends('layouts.app')

@section('title', "Qr #$qr->id")

@section('content')
  <div class="bg-light border-bottom mb-4">
    <div class="container">
      <div class="nav justify-content-center">
        <a class="nav-link" href="{{ route('admin.qrs.edit', $qr->id) }}">Edit</a>

        <x-delete-btn class="nav-link" :action="route('admin.qrs.destroy', $qr->id)" :id="$qr->id"
                      >Delete
        </x-delete-btn>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card bg-dark">
      <div class="card-header d-flex align-items-center">
        <a href="{{ route('admin.qrs.index') }}" class="btn btn-link btn-sm me-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="1em" height="1em">
            <path fill="currentColor"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
          </svg>
        </a>
        Qr #{{ $qr->id }}
      </div>

      <div class="card-body">

        <div><strong>Id:</strong> {{ $qr->id }}</div>

        <div><strong>Type:</strong> {{ $qr->type->name }} ({{ $qr->type->description }})</div>

        <div><strong>Title:</strong> {{ $qr->title }}</div>

        <div><strong>Description:</strong> {{ $qr->description }}</div>

        <div><strong>Slug:</strong> {{ $qr->slug }}</div>

        <div><strong>Created at:</strong> {{ $qr->created_at->format("d/m/Y H:i") }}</div>

        <div><strong>Updated at:</strong> {{ $qr->updated_at->format("d/m/Y H:i") }}</div>

        <div><strong>Data:</strong>
          <pre><code>{!! json_encode($qr->data, JSON_PRETTY_PRINT) !!}</code></pre>
        </div>

        <x-qr-code-preview :type="$qr->type" :json-data="$qr->data"/>
      </div>
    </div>
  </div>

@endsection
