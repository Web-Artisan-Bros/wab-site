{{-- @props([
  "active" => false,
]) --}}

{{-- <a class="nav-link {{ $active ? 'active' : ''  }}" href="{{ $href }}">
  {{ $slot }}
</a> --}}
<div>

  <nav class="navbar navbar-expand-lg py-3 navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/assets/NavLogoYW.svg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVIZI
            <img src="/assets/VectorArrowWhite.svg" alt="">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-light" href="#">SITI WEB</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">SEO</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">SOCIAL MARKETING</a><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">WEB DESIGN</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">PACHETTO BUSINESS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CHI SIAMO</a>
        </li>
      </ul>
      <button class="btn btn-primary">
        SCRIVICI
      <img src="/assets/VectorArrow.svg" alt="">
      </button>
    </div>
  </div>
</nav>

</div>


