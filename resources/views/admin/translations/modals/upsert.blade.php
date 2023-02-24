<div wire:ignore.self class="modal fade" tabindex="-1" id="admin.translations.modal.upsert">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ $modalTitle }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="upsert">
        <div class="modal-body">
          @csrf()

          <div class="mb-3">
            <label class="form-label" for="input_group">Group</label>
            <input type="text"
                   class="form-control @error('form.group') is-invalid @enderror"
                   name="group"
                   id="input_group"
                   wire:model="form.group">
            @error('form.group')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="input_key">Key</label>
            <textarea type="text"
                      class="form-control @error('form.key') is-invalid @enderror"
                      name="key"
                      id="input_key"
                      cols="30" rows="3"
                      wire:model="form.key"
            ></textarea>
            @error('form.key')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="nav nav-tabs" role="tablist">
            @foreach($availableLangs as $lang)
              <button @class(['nav-link', 'active' => $loop->index === $modalActiveTab]) aria-current="page"
                      data-bs-toggle="tab"
                      data-bs-target="#lang_{{$lang['code']}}"
                      type="button" role="tab"
                      wire:click="$set('modalActiveTab', {{$loop->index}})">{{$lang["label"]}}</button>
            @endforeach
          </div>

          <div class="tab-content" id="nav-tabContent">
            @foreach($availableLangs as $lang)
              <div @class(['tab-pane fade', 'show active' => $loop->index === $modalActiveTab])
                   id="lang_{{$lang['code']}}" role="tabpanel" tabindex="0">
                <textarea class="form-control" rows="10" wire:model="form.texts.{{ $lang['code'] }}"></textarea>
              </div>
            @endforeach
          </div>
        </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
          <button type="submit" class="btn btn-primary">{{ $modalSaveButton }}</button>
        </div>
      </form>
    </div>
  </div>
</div>
