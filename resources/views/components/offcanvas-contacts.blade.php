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
            {!! __('Qualsiasi cosa per <span class="wab-highlight">aiutarti</span> a definire la tua presenza
                            online, <span class="wab-highlight">trasformiamo</span>
                            le tue idee e <span class="wab-highlight">le</span> <span class="wab-highlight">tue</span>
                            <span class="wab-highlight">necessità</span> in un prodotto concreto!')!!}
          </div>

          <livewire:forms.contacts></livewire:forms.contacts>
        </div>
      </div>
    </div>
  </div>
</div>
