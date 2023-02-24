<div>
  @include("admin.translations.modals.upsert")
  @include("admin.translations.modals.delete")

  <div class=" bg-light border-bottom mb-4" data-bs-theme="light">
    <div class="container">
      <div class="nav justify-content-center">
        <a class="nav-link" href="#"
           data-bs-toggle="modal" data-bs-target="#admin.translations.modal.upsert"
           wire:click="onAddClick">
          <x-svg-icon icon="icons/playlist-plus"></x-svg-icon>
          Aggiungi
        </a>

        <a class="nav-link" href="#"
           wire:click.prevent="onRescanClick">
          <x-svg-icon icon="icons/reload"></x-svg-icon>
          Riscansiona
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="card bg-dark">
      <div class="card-header">Traduzioni disponibili</div>

      <div class="card-body">
        <livewire:translations-table></livewire:translations-table>
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
