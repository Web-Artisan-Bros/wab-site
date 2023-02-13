<div class="offcanvas offcanvas-end  wbaOffCanvas px-2 themed-section" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-bs-theme="{{$theme}}">
  <div class="offcanvas-header justify-content-end">

    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="lead pb-5 lh-1">
      Qualsiasi cosa per aiutarti a definire la tua presenza online, trasformiamo le tue idee e le tue necessità in un prodotto concreto!
    </div>
    <div class="p-3 mb-5 offcanvas-form">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Il tuo nome">
        <label for="exampleFormControlInput1" class="form-label">Nome:<span class="text-primary">*</span></label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email:<span class="text-primary">*</span></label>
      </div>
      <div class="form-floating mb-3">
        <input type="tel" class="form-control" id="floatingInput" placeholder="Il tuo telefono">
        <label for="floatingInput" class="form-label">Telefono:</label>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Il tuo messaggio" contenteditable></textarea>
        <label for="exampleFormControlTextarea1" class="form-label">Inserisci il tuo messaggio:<span class="text-primary">*</span></label>
      </div>
      <div class="d-flex flex-column align-items-strech">
        <p class="text-primary pb-2">* campo obbligatorio</p>
        <button type="button" class="btn btn-primary">
          INVIA MESSAGGIO
          <x-svg-icon icon="VectorArrow"></x-svg-icon>
        </button>
      </div>
    </div>
  </div>
</div>