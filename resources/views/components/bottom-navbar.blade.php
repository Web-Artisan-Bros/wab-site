<nav data-bs-theme="{{ $theme }}" class="bottom-navbar-container">
  <ul class="nav justify-content-center">
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
{{--            <x-svg-icon class="imgWhite" icon="VectorArrowBlack"></x-svg-icon>--}}
          </a>
          <ul class="dropdown-menu">
            @foreach ($entry['children'] as $child)
              <li @class(['border-bottom'=> !$loop->last])>
                <a class="dropdown-item route-link"
                   href="{{ route($child['routeName']) }}">
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
</nav>
