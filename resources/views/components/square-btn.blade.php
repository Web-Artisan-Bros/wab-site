<div class="d-flex {{ $reverse }}">
  <div class="btn-sqr red-square"></div>

  <div class="btn-sqr white-square d-flex align-items-center justify-content-center" type="button"
       data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">

    <div class="lead contact-text contact-text-top">CONTATTACI</div>
    <div class="lead contact-text contact-text-right">CONTATTACI</div>
    <div class="lead contact-text contact-text-bottom">CONTATTACI</div>
    <div class="lead contact-text contact-text-left">CONTATTACI</div>

    <div class="align-items-center d-flex  align-self-center">
{{--      <div class="rotate-270 lead pt-4 align-self-start">CONTATTACI</div>--}}
      <x-svg-icon class="inside-arrow" icon="contact_arrow"></x-svg-icon>

{{--      <div class="rotate-90 lead pt-4  align-self-end">CONTATTACI</div>--}}
    </div>

{{--    <div class=" pb-2 ps-4 lead">CONTATTACI</div>--}}
  </div>


</div>
<div class="offcanvas offcanvas-end  wbaOffCanvas px-2" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header justify-content-end">

    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="lead pb-5 lh-1">
      Qualsiasi cosa per aiutarti a definire la tua presenza online, trasformiamo le tue idee e le tue necessità in un prodotto concreto!
    </div>
    <div class="border border-3 border-dark p-3 mb-5 offcanvas-form">
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
