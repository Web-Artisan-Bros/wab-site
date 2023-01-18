{{-- @props([
  "active" => false,
]) --}}

{{-- <a class="nav-link {{ $active ? 'active' : ''  }}" href="{{ $href }}">
{{ $slot }}
</a> --}}
<div>

  <nav class="navbar navbar-expand-lg py-3 navbar-dark wab-nav">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/assets/NavLogoYW.svg" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active wab-highlight" aria-current="page" href="#">
              HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle position-relative" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
              <img class="navHighlight position-absolute top-50 start-50 translate-middle"
                   src="/assets/NavHighlight.svg" alt="">
              SERVIZI
              <x-svg-icon class="imgWhite" icon="VectorArrowBlack"></x-svg-icon>
              {{--              <img class="imgWhite" src="/assets/VectorArrowWhite.svg" alt="">--}}
              <!-- <img class="imgBlack" src="/assets/VectorArrowBlack.svg" alt=""> -->

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">SITI WEB <img class="imgWhite ms-2"
                                                                  src="/assets/VectorArrowWhite.svg" alt=""></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">SEO<img class="imgWhite ms-2" src="/assets/VectorArrowWhite.svg"
                                                            alt=""></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">SOCIAL MARKETING<img class="imgWhite ms-2"
                                                                         src="/assets/VectorArrowWhite.svg" alt=""></a>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">WEB DESIGN<img class="imgWhite ms-2"
                                                                   src="/assets/VectorArrowWhite.svg" alt=""></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">PACHETTO BUSINESS<img class="imgWhite ms-2"
                                                                          src="/assets/VectorArrowWhite.svg" alt=""></a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CHI SIAMO</a>
          </li>
        </ul>
        <button class="btn btn-primary ms-1">
          SCRIVICI
          <x-svg-icon icon="VectorArrow"></x-svg-icon>
        </button>
      </div>
    </div>
  </nav>

</div>
