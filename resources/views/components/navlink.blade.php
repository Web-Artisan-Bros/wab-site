{{-- @props([
  "active" => false,
]) --}}

{{-- <a class="nav-link {{ $active ? 'active' : ''  }}" href="{{ $href }}">
{{ $slot }}
</a> --}}

<div>

  <nav class="navbar navbar-expand-lg py-3 wab-nav  {{ $background }}">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{ $logo }}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active wab-highlight" aria-current="page" href="{{url('/')}}">
              HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle position-relative" href="{{url('servizi')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">

              SERVIZI
              <x-svg-icon class="imgWhite" icon="VectorArrowBlack"></x-svg-icon>



            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('servizi')}}">SITI WEB<x-svg-icon icon="VectorArrowS" /></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('servizi')}}">SEO<x-svg-icon icon="VectorArrowS" /></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('servizi')}}">SOCIAL MARKETING<x-svg-icon icon="VectorArrowS" /></a>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('servizi')}}">WEB DESIGN<x-svg-icon icon="VectorArrowS" /></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('servizi')}}">PACHETTO BUSINESS<x-svg-icon icon="VectorArrowS" /></a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('chisiamo')}}">CHI SIAMO</a>
          </li>
        </ul>
        <button class="btn btn-primary ms-1" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          SCRIVICI
          <x-svg-icon icon="VectorArrow"></x-svg-icon>
        </button>
      </div>
    </div>
  </nav>
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
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Il tuo messaggio"></textarea>
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
</div>