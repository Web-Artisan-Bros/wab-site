@extends('./layouts/public')

@section ('content')
<x-navlink background="dark-nav" logo="/assets/NavLogoYW.svg" />
<x-jumbo />

<x-services />
<x-contact />
<x-accordion :entries="$accordionWhyUs" />
<x-footer background="dark-footer" />
@endsection