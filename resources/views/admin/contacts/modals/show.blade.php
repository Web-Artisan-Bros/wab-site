<div wire:ignore.self class="modal fade modal-lg" tabindex="-1" id="admin.contacts.modal.show">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Dettagli contatto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      @if($toShow)
        <div class="modal-body pb-5">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="row">
                <div class="col-4"><strong>Nome</strong></div>
                <div class="col-8">{{ $toShow->name }}</div>
              </div>
            </div>

            <div class="list-group-item">
              <div class="row">
                <div class="col-4"><strong>Email</strong></div>
                <div class="col-8 d-flex align-items-center justify-content-between">{{ $toShow->email }}
                  <a class="ms-3"
                     href="mailto:{{ $toShow->email }}?subject=Risposta contatto da webartisanbros.com&body=Gentile {{ $toShow->name }},%0D%0A abbiamo ricevuto correttamente la sua richiesta del {{ $toShow->created_at->format("d/m/Y h:i:s") }}.%0D%0A">Rispondi</a>
                </div>
              </div>
            </div>

            <div class="list-group-item">
              <div class="row">
                <div class="col-4"><strong>Telefono</strong></div>
                <div class="col-8">{{ $toShow->phone }}</div>
              </div>
            </div>

            <div class="list-group-item">
              <div class="row">
                <div class="col-4"><strong>Data creazione</strong></div>
                <div class="col-8">{{ $toShow->created_at->format("d/m/Y h:i:s") }}</div>
              </div>
            </div>

            <div class="list-group-item">
              <div class="row">
                <div class="col-4"><strong>Messaggio</strong></div>
                <div class="col-8">{{ $toShow->message }}</div>
              </div>

            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
