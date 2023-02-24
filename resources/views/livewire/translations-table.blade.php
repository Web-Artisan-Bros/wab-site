<div>
  <form wire:submit.prevent="" action="" class="mb-5">
    <legend>Filtri</legend>

    <div class="d-flex align-items-center gap-2">
      <div class="form-floating col">
        <select class="form-select" id="groupInput" wire:model.lazy="filterGroup">
          <option value="">Qualsiasi</option>
          @foreach($groups as $group)
            <option value="{{ $group->group }}">{{ $group->group }}</option>
          @endforeach
        </select>
        <label for="groupInput">Gruppo</label>
      </div>

      <div class="form-floating col">
        <input type="text" class="form-control" id="keyInput" placeholder="Chiave" wire:model.lazy="filterKey">
        <label for="keyInput">Chiave</label>
      </div>

      @if($this->areActiveFilters)
        <div class=" flex-grow-0 d-flex align-items-center gap-2">
          <button class="btn btn-outline-secondary" type="reset" wire:click="filtersReset">
            <x-svg-icon icon="xmark-solid"></x-svg-icon>
          </button>
        </div>
      @endif
    </div>
  </form>

  <div class="table-responsive">
    <table class="table">
      <thead>
      <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Gruppo</th>
        <th>Chiave</th>
        <th>Lingue</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      @foreach ($translations as $translation)
        <tr>
          <td class="text-center">{{ $translation->id }}</td>
          <td class="text-center">{{ $translation->group }}</td>
          <td>{{ $translation->key }}</td>
          <td class="text-center">{{ implode(", ", array_keys($translation->text)) }}</td>
          {{-- Table actions --}}
          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
              {{-- Edit Button --}}
              <a type="button" class="btn btn-primary" title="Edit"
                 href="#"
                 data-bs-toggle="modal" data-bs-target="#admin.translations.modal.upsert"
                 wire:click="$emitUp('editClick', {{ $translation->id }})">
                <x-svg-icon icon="icons/playlist-edit"></x-svg-icon>
              </a>

              {{-- Delete Button --}}
              <a type="button" class="btn btn-danger" title="Delete"
                 data-bs-toggle="modal" data-bs-target="#admin.translations.modal.delete"
                 wire:click="$emitUp('deleteClick', {{ $translation->id }})">
                <x-svg-icon icon="icons/playlist-remove"></x-svg-icon>
              </a>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

    {{ $translations->links() }}
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
