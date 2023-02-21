<div data-bs-theme="{{ $theme }}">

  <nav class="navbar navbar-expand-lg py-3 wab-nav">
    <div class="container">
      <a class="navbar-brand route-link" href="{{ url('/') }}">
        <x-svg-icon icon="logo_text" class="d-none d-lg-block" />
        <x-svg-icon icon="logo_nav" class="d-lg-none" />
      </a>

      <button class="navbar-toggler btn btn-primary btn-menu" type="button" data-bs-toggle="collapse" data-bs-target="#wab-navbar-menu"
        aria-controls="wab-navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        {{-- <span class="navbar-toggler-icon"></span> --}}
        <x-svg-icon icon="menu" class="d-lg-none" />
      </button>

      <div class="collapse navbar-collapse" id="wab-navbar-menu">
        <div class="flex-menu">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @foreach ($menuEntries as $entry)
            @if (!key_exists('children', $entry))
            <li class="nav-item d-flex align-items-center text-uppercase">
              <x-navigation-link href="{{ route($entry['routeName']) }}"
                active="{{ request()->routeIs($entry['routeName']) }}">
                {{ $entry['label'] }}
              </x-navigation-link>
            </li>
            @else
            <li class="nav-item dropdown  d-flex align-items-center text-uppercase">
              <a @class([ 'active wab-highlight'=>
                strpos(Route::currentRouteName(), $entry['routeName']) === 0,
                'nav-link position-relative',
                ]) href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ $entry['label'] }}
                <x-svg-icon class="imgWhite" icon="VectorArrowBlack"></x-svg-icon>
              </a>
              <ul class="dropdown-menu">
                @foreach ($entry['children'] as $child)
                <li @class(['border-bottom'=> !$loop->last])>
                  <a class="dropdown-item route-link" href="{{ route($child['routeName']) }}">
                    <x-svg-icon icon="VectorArrowS" class="me-2 ms-0" />
                    {{ $child['label'] }}
                  </a>
                </li>
                @endforeach
              </ul>
            </li>
            @endif
            @endforeach
          </ul>

          <button class=" btn ms-1 {{ $theme === 'yellow' ? 'btn-primary' : 'btn-' . $theme }}" type="button"
            data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            SCRIVICI
            <x-svg-icon icon="VectorArrow"></x-svg-icon>
          </button>
        </div>
      </div>
    </div>
  </nav>
  <x-offcanvas></x-offcanvas>
</div>
