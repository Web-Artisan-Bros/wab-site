@extends('layouts.app')

@section('title', 'List of translations')

@section('content')
  <div class=" bg-light border-bottom mb-4" data-bs-theme="light">
    <div class="container">
      <div class="nav justify-content-center">
        <a class="nav-link" href="{{ route('admin.translations.create') }}">Add translation</a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card bg-dark">
      <div class="card-header">List of Translations</div>

      <div class="card-body">
        <livewire:translations-table></livewire:translations-table>
      </div>
    </div>
  </div>
@endsection
