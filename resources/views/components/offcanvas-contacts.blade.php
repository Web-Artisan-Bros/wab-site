<div class="offcanvas offcanvas-bottom  offcanvas-contacts" tabindex="-1"
     id="offcanvasContacts"
     data-bs-theme="{{$theme}}">

  <div class="offcanvas-header justify-content-end">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="lead pb-5">
            Qualsiasi cosa per aiutarti a definire la tua presenza online, trasformiamo le tue idee e le tue necessità
            in un
            prodotto concreto!
          </div>

          <form class="">
            <fieldset>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Il tuo nome">
                <label for="exampleFormControlInput1" class="form-label">
                  <span class="accent-color">*</span>
                  Nome
                </label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">
                  <span class="accent-color">*</span>
                  Email
                </label>
              </div>

              <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="floatingInput" placeholder="Il tuo telefono">
                <label for="floatingInput" class="form-label">Telefono</label>
              </div>

              <div class="form-floating mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Il tuo messaggio"
                        contenteditable></textarea>
                <label for="exampleFormControlTextarea1" class="form-label">
                  <span class="accent-color">*</span>
                  Inserisci il tuo messaggio
                </label>
              </div>
            </fieldset>

            <p class="accent-color mb-5 ms-3">* campo obbligatorio</p>


            <button type="button" class="btn btn-themed w-100 mb-4">
              INVIA MESSAGGIO
              <x-svg-icon icon="VectorArrow"></x-svg-icon>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
