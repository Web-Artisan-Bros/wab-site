<div wire:ignore.self class="modal fade" tabindex="-1" id="admin.translations.modal.delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Cancellare traduzione?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <p class="lead">Sei sicuro di voler eliminare questa traduzione? L'operazione sarà irreversibile.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-primary" wire:click="onDeleteConfirm">Si, elimina</button>
      </div>
    </div>
  </div>
</div>
