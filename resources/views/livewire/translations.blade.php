<div>
  @include("admin.translations.modals.upsert")

  <div class=" bg-light border-bottom mb-4" data-bs-theme="light">
    <div class="container">
      <div class="nav justify-content-center">
        <a class="nav-link" href="#"
           data-bs-toggle="modal" data-bs-target="#admin.translations.modal.upsert"
           wire:click="onAddClick">
        Aggiungi traduzione
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card bg-dark">
      <div class="card-header">Traduzioni disponibili</div>

      <div class="card-body">
        <livewire:translations-table></livewire:translations-table>
      </div>
    </div>
  </div>

</div>
