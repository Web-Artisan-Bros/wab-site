<div>
  @if($withFilters)
    <form wire:submit.prevent="" action="" class="mb-5">
      <legend class="d-flex align-items-center justify-content-between">
        Filtri
        @if($this->areActiveFilters)
          <div class=" flex-grow-0 d-flex align-items-center gap-2">
            <button class="btn btn-secondary" type="reset" wire:click="filtersReset">
              <x-svg-icon icon="xmark-solid"></x-svg-icon>
            </button>
          </div>
        @endif
      </legend>

      <div class="row row-cols-2 g-2">
        <div class="col">
          <div class="form-floating col">
            <input type="text" class="form-control" id="nameInput" placeholder="Nome" wire:model.lazy="filters.name">
            <label for="nameInput">Nome</label>
          </div>
        </div>
        <div class="col">
          <div class="form-floating col">
            <input type="text" class="form-control" id="emailInput" placeholder="Email" wire:model.lazy="filters.email">
            <label for="emailInput">Email</label>
          </div>
        </div>

        <div class="col">
          <div class="form-floating col">
            <input type="text" class="form-control" id="messageInput" placeholder="Messaggio"
                   wire:model.lazy="filters.message">
            <label for="messageInput">Messaggio</label>
          </div>
        </div>
        <div class="col">
          <div class="form-floating col">
            <input type="date" class="form-control" id="createdAtInput" placeholder="Data Creazione (maggiore di)"
                   wire:model.lazy="filters.createdAt">
            <label for="createdAtInput">Data Creazione (maggiore di)</label>
          </div>
        </div>
      </div>
    </form>
  @endif

  <div class="table-responsive">
    <table class="table">
      <colspan>
        <col>
        <col>
        <col>
        <col>
        <col style="width: 30%">
        <col>
        <col style="width: 1%;">
      </colspan>

      <thead>
      <tr>
        <th class="text-center">Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Messaggio</th>
        <th>Data</th>
        @if(!$onlyLast)
          <th></th>
        @endif
      </tr>
      </thead>
      <tbody>
      @foreach ($contacts as $contact)
        <tr>
          <td class="text-center">{{ $contact->id }}</td>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->phone }}</td>
          <td>{{ Str::limit($contact->message, 50, " ...") }}</td>
          <td>{{ $contact->created_at->format("d/m/Y h:i:s") }}</td>

          @if(!$onlyLast)
            {{-- Table actions --}}
            <td class="text-end">
              <div class="btn-group btn-group-sm" role="group">
                {{-- Show Button --}}
                <a type="button" class="btn btn-primary" title="Edit"
                   href="#"
                   data-bs-toggle="modal" data-bs-target="#admin.contacts.modal.show"
                   wire:click="$emitUp('showClick', {{ $contact->id }})">
                  <x-svg-icon icon="icons/open-in-app"></x-svg-icon>
                </a>

                {{-- Delete Button --}}
                <a type="button" class="btn btn-danger" title="Delete"
                   data-bs-toggle="modal" data-bs-target="#admin.contacts.modal.delete"
                   wire:click="$emitUp('deleteClick', {{ $contact->id }})">
                  <x-svg-icon icon="icons/playlist-remove"></x-svg-icon>
                </a>
              </div>
            </td>
          @endif
        </tr>
      @endforeach
      </tbody>
    </table>

    @if(!$onlyLast)
      {{ $contacts->links() }}
    @endif
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

