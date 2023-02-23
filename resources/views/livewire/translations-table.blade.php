<div>
  <form action="" class="mb-5">
    <legend>Filtri</legend>

    <div class="d-flex align-items-center gap-2">
      <div class="form-floating col">
        <select class="form-select" id="groupInput" wire:model.lazy="filterGroup">
          <option>Qualsiasi</option>
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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em">
                  <path fill="currentColor"
                        d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                </svg>
              </a>

              {{-- Show Button --}}
              <a type="button" class="btn btn-warning" title="Show"
                 href="{{ route('admin.translations.show', $translation->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="1em" height="1em">
                  <path fill="currentColor"
                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                </svg>
              </a>

              {{-- Delete Button --}}
              <a type="button" class="btn btn-danger" title="Delete">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em">
                  <path fill="currentColor"
                        d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/>
                </svg>
              </a>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

    {{ $translations->links() }}
  </div>
</div>
