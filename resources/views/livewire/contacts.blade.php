<div>
  @include("admin.contacts.modals.show")
  @include("admin.contacts.modals.delete")

  {{--<div class=" bg-light border-bottom mb-4" data-bs-theme="light">
    <div class="container">
      <div class="nav justify-content-center">
      </div>
    </div>
  </div>--}}

  <div class="container my-4">
    @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="card bg-dark">
      <div class="card-header">Contatti ricevuti</div>

      <div class="card-body">
        <livewire:tables.contacts></livewire:tables.contacts>
      </div>
    </div>
  </div>

  <div wire:loading.delay>
    <div class="loading-overlay">
      <div class="loading-overlay-content">
        <div class="spinner-grow text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
  </div>
</div>
