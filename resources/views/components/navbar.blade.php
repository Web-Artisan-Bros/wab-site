<div>

  <nav class="navbar navbar-expand-lg py-3 wab-nav">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <x-svg-icon icon="logo_text" />
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#wab-navbar-menu" aria-controls="wab-navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="wab-navbar-menu">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          @foreach($menuEntries as $entry)
          @if(!key_exists("children", $entry))
          <li class="nav-item d-flex align-items-center text-uppercase">
            <x-navigation-link href="{{route($entry['routeName'])}}" active="{{ request()->routeIs($entry['routeName']) }}">
              {{ $entry["label"]  }}
            </x-navigation-link>
          </li>
          @else
          <li class="nav-item dropdown  d-flex align-items-center text-uppercase">
            <a @class(['active wab-highlight'=> (strpos(Route::currentRouteName(), $entry["routeName"]) === 0),
              "nav-link position-relative"])
              href="#"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ $entry["label"] }}
              <x-svg-icon class="imgWhite" icon="VectorArrowBlack"></x-svg-icon>
            </a>
            <ul class="dropdown-menu">
              @foreach($entry["children"] as $child)
              <li @class(['border-bottom'=> !$loop->last])>
                <a class="dropdown-item" href="{{ route($child['routeName'])  }}">
                  <x-svg-icon icon="VectorArrowS" class="me-2 ms-0" />
                  {{ $child["label"]  }}
                </a>
              </li>
              @endforeach
            </ul>
          </li>
          @endif

          @endforeach
        </ul>

        <button class=" btn ms-1 {{ $theme === 'yellow'? 'btn-primary' : 'btn-'.$theme }}" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
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
        Qualsiasi cosa per aiutarti a definire la tua presenza online, trasformiamo le tue idee e le tue necessità in un
        prodotto concreto!
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