@if($version === "large")

  <div @class(["contact-btn-container", "contact-reverse"=> $reverse])>
    <div class="contact-square contact-bg-square "></div>

    <div class="contact-square contact-main-square"
         type="button" role="button"
         data-bs-toggle="offcanvas" href="#offcanvasContacts"
         aria-controls="offcanvasContacts">

      <div class="lead contact-text contact-text-top">{{ __('CONTATTACI')}}</div>
      <div class="lead contact-text contact-text-right">{{ __('CONTATTACI')}}</div>
      <div class="lead contact-text contact-text-bottom">{{ __('CONTATTACI')}}</div>
      <div class="lead contact-text contact-text-left">{{ __('CONTATTACI')}}</div>

      <div class="align-items-center d-flex  align-self-center">
        <x-svg-icon class="inside-arrow" icon="contact_arrow"></x-svg-icon>
      </div>
    </div>
  </div>
@else
  <button {{ $attributes->merge(['class' => 'btn btn-themed point-down']) }}
          type="button" role="button"
          data-bs-toggle="offcanvas" href="#offcanvasContacts"
          aria-controls="offcanvasContacts">
    {{ __('SCRIVICI')}}
    <x-svg-icon icon="arrow_top_right"></x-svg-icon>
  </button>
@endif
