@extends('layouts.app')

@section('title', 'Lista traduzioni')

@section('content')
  <div class="container">
    <div class="card bg-dark mt-4">
      <div class="card-header justify-content-between d-flex align-items-center">
        Ultimi contatti
        <a href="{{ route('admin.contacts.index') }}">Vedi tutti</a>
      </div>

      <div class="card-body">
        <livewire:tables.contacts :withFilters="false" :onlyLast="true"/>
      </div>
    </div>

    <div class="card bg-dark mt-4">
      <div class="card-header justify-content-between d-flex align-items-center">
        Ultime traduzioni create
        <a href="{{ route('admin.translations.index') }}">Vedi tutte</a>
      </div>

      <div class="card-body">
        <livewire:tables.translations :withFilters="false" :onlyLast="true"/>
      </div>
    </div>
  </div>
@endsection
