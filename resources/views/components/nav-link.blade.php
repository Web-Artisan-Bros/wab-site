@props([
  "active" => false,
])

<a class="nav-link {{ $active ? 'active' : ''  }}" href="{{ $href }}">
  {{ $slot }}
</a>
