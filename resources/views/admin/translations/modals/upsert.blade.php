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
                      cols="30" rows="5"
                      wire:model="form.key"
            ></textarea>
            @error('form.key')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="input_text">Text</label>
            <input type="text"
                   class="form-control @error('text') is-invalid @enderror"
                   name="text"
                   id="input_text"
                   value="{{ old('text') }}">
            @error('text')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
