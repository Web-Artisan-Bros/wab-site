<a href="#"
   data-bs-toggle="modal" data-bs-target="#delete_btn_{{$id}}"
    {{ $attributes }}>
  {{ $slot }}
</a>

<div class="modal fade" id="delete_btn_{{$id}}" tabindex="-1"
     aria-labelledby="delete_btn_{{$id}}_label"
     aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="{{$action}}" method="POST">
      @csrf
      @method('DELETE')

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete_btn_{{$id}}_label">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        Sei sicuro di voler eliminare questo elemento?
      </div>

      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="submit" class="btn btn-primary">Si elimina</button>
      </div>
    </form>
  </div>
</div>
