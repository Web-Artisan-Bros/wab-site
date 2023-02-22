@if($version === "large")
  <div class="d-flex justify-content-center {{ $reverse }}">
    <div class="btn-sqr red-square"></div>

    <div class="btn-sqr white-square d-flex align-items-center justify-content-center"
         type="button" role="button"
         data-bs-toggle="offcanvas" href="#offcanvasContacts"
         aria-controls="offcanvasContacts">

      <div class="lead contact-text contact-text-top">CONTATTACI</div>
      <div class="lead contact-text contact-text-right">CONTATTACI</div>
      <div class="lead contact-text contact-text-bottom">CONTATTACI</div>
      <div class="lead contact-text contact-text-left">CONTATTACI</div>

      <div class="align-items-center d-flex  align-self-center">
        <x-svg-icon class="inside-arrow" icon="contact_arrow"></x-svg-icon>
      </div>
    </div>
  </div>
@else
  <button {{ $attributes->merge(['class' => 'btn btn-themed']) }}
          type="button" role="button"
          data-bs-toggle="offcanvas" href="#offcanvasContacts"
          aria-controls="offcanvasContacts">
    SCRIVICI
    <x-svg-icon icon="VectorArrow"></x-svg-icon>
  </button>
@endif
