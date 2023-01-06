<nav x-data="{ open: false }" class="navbar navbar-expand-lg bg-primary">

  <!-- Primary Navigation Menu -->
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="{{ route('dashboard') }}">
      <img src="{{ asset('assets/logo.svg') }}" alt="Logo" style="height: 60px;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
          </x-nav-link>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                   alt="{{ Auth::user()->name }}"/>
            @else
              <span class="inline-flex rounded-md">
                                        {{ Auth::user()->name }}

                                </span>
            @endif
          </a>

          <ul class="dropdown-menu">
            <!-- Account Management -->
            <li><a class="dropdown-item" href="#">{{ __('Manage Account') }}</a></li>
            <li><a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>

            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <li><a class="dropdown-item" href="{{ route('api-tokens.index') }}">{{ __('API Tokens') }}</a></li>
            @endif

            <div class="border-t border-gray-100"></div>

            <li>
              <form class="dropdown-item" method="POST" action="{{ route('logout') }}" x-data
                    @submit.prevent="$root.submit();">
                @csrf

                <button class="dropdown-item" href="{{ route('logout') }}">{{ __('Log Out') }}</button>
              </form>
            </li>


          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
