@props(['active', 'aria'])

<a @class([ 'active wab-highlight'=> $active,
    'nav-link'=> true,
    ]) {{ $attributes }} {{$active ? 'aria-current="page"' : ''}}>
    {{ $slot }}</a>