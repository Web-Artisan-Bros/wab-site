<div data-bs-theme="{{ $theme }}" class="navbar-container">
  <nav class="navbar navbar-expand-lg wab-nav">
    <div class="container-lg">
      <a class="navbar-brand route-link" href="{{ url('/') }}">
        <x-svg-icon icon="logo_text" class="d-none d-sm-block"/>
        <x-svg-icon icon="logo_nav" class="d-sm-none"/>
      </a>

      <button class="btn btn-themed btn-menu-toggler collapsed d-lg-none" type="button"
              data-bs-toggle="offcanvas" data-bs-target="#mobileMenuRight"
              aria-controls="wab-navbar-menu" aria-expanded="false" aria-label="Toggle navigation">

        <span class="toggler-icon">
          <span class="toggler-line"></span>
          <span class="toggler-line"></span>
          <span class="toggler-line"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="wab-navbar-menu">
        <div class="flex-menu">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @foreach ($menuEntries as $entry)
              @if (!key_exists('children', $entry))
                <li class="nav-item text-uppercase">
                  <x-navigation-link href="{{ route($entry['routeName']) }}"
                                     active="{{ request()->routeIs($entry['routeName']) }}">
                    {{ $entry['label'] }}
                  </x-navigation-link>
                </li>
              @else
                <li class="nav-item dropdown text-uppercase">
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
                          <x-svg-icon icon="VectorArrowS" class="me-2 ms-0"/>
                          {{ $child['label'] }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </li>
              @endif
            @endforeach
          </ul>

          <x-contact-btn version="small" class="ms-1"></x-contact-btn>
        </div>
      </div>
    </div>
  </nav>

  <div class="scroll-spy"></div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="mobileMenuRight"
     data-bs-theme="{{ $theme }}"
     aria-labelledby="offcanvasRightLabel">
  {{--<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">
      <x-svg-icon icon="logo_text"/>
    </h5>
    <button type="button" class="btn-close-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>--}}
  <div class="offcanvas-body">

    <ul class="list-group list-group-flush">
      @foreach ($menuEntries as $entry)
        @if (!key_exists('children', $entry))
          <li class="list-group-item list-group-item-action text-uppercase">
            <x-navigation-link href="{{ route($entry['routeName']) }}"
                               active="{{ request()->routeIs($entry['routeName']) }}">
              {{ $entry['label'] }}
            </x-navigation-link>
          </li>
        @else
          <li class="list-group-item list-group-item-action dropdown text-uppercase">
            <a @class([ 'active wab-highlight'=>
                strpos(Route::currentRouteName(), $entry['routeName']) === 0,
                'nav-link position-relative',
                ]) href="#" role="button"
               data-bs-toggle="dropdown" aria-expanded="false">
              {{ $entry['label'] }}
              {{--              <x-svg-icon class="imgWhite" icon="VectorArrowBlack"></x-svg-icon>--}}
            </a>
            <ul class="dropdown-menu">
              @foreach ($entry['children'] as $child)
                <li @class(['border-bottom'=> !$loop->last])>
                  <a class="dropdown-item route-link" href="{{ route($child['routeName']) }}">
                    <x-svg-icon icon="VectorArrowS" class="me-2 ms-0"/>
                    {{ $child['label'] }}
                  </a>
                </li>
              @endforeach
            </ul>
          </li>
        @endif
      @endforeach
    </ul>

  </div>
</div>
