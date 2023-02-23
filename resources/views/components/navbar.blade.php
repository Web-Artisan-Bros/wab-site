<div data-bs-theme="{{ $theme }}" class="navbar-container">
  <nav class="navbar navbar-expand-lg wab-nav">
    <div class="container-lg">
      <a class="navbar-brand route-link" href="{{ url('/') }}">
        <x-svg-icon icon="logo_text" class="d-none d-sm-flex"/>
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
                    {{ __('menu.' . $entry['label']) }}
                  </x-navigation-link>
                </li>
              @else
                <li class="nav-item dropdown text-uppercase">
                  <a @class([ 'active wab-highlight'=> strpos(Route::currentRouteName(), $entry['routeName']) === 0, 'nav-link position-relative'])
                     style="z-index: 1001"
                     href="#" role="button"
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

          <x-contact-btn version="small" class="ms-1 point-down"></x-contact-btn>
        </div>
      </div>
    </div>
  </nav>

  <div class="scroll-spy"></div>
</div>

{{-- Mobile menu --}}
<div class="offcanvas offcanvas-end" data-bs-scroll="false" tabindex="-1" id="mobileMenuRight"
     data-bs-theme="{{ $theme }}"
     aria-labelledby="offcanvasRightLabel">

  <div class="offcanvas-body d-flex flex-column">

    <div class="list-group list-group-flush mb-5 flex-fill">
      @foreach ($menuEntries as $entry)
        @if (!key_exists('children', $entry))
          <a href="{{ route($entry['routeName']) }}"
             class="list-group-item list-group-item-action route-link text-uppercase">
            {{ $entry['label'] }}
          </a>
        @else
          <a class="list-group-item list-group-item-action text-uppercase collapsed"
             data-bs-toggle="collapse" href="#mobile-services-menu" role="button"
             aria-expanded="false" aria-controls="mobile-services-menu">
            {{ $entry['label'] }}

            <x-svg-icon icon="VectorArrowS" class="me-2 ms-0"/>
          </a>

          <div class="collapse" id="mobile-services-menu">
            <div class="list-group list-group-flush border-bottom">
              @foreach ($entry['children'] as $child)
                <a class="list-group-item list-group-item-action route-link"
                   href="{{ route($child['routeName']) }}">
                  <x-svg-icon icon="VectorArrowS" class="me-2 ms-0"/>
                  {{ $child['label'] }}
                </a>
              @endforeach
            </div>
          </div>
        @endif
      @endforeach
    </div>

    <div class="px-4">
      <x-contact-btn version="small" class="w-100"></x-contact-btn>
    </div>
  </div>
</div>
