@extends('./layouts/public')

@php
$theme = 'yellow';
$navbarVariant = 'yellow';
$pageTitle = trans('menu.Chi siamo');
@endphp

@section('content')

<x-jumbo dnone="true" reverseJumbo="flex-lg-row-reverse" theme="yellow" reverse>
    <x-slot:text>
        <div class="mb-3 mb-lg-5">
            <h1>{!! __('SIAMO <span class="wab-highlight">
                    WEB</span>&nbsp;<span class="wab-highlight">
                    ARTISAN</span>&nbsp;<span class="wab-highlight">BROS')!!}</span></h1>
        </div>
        <div>
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <p class="lead text-dark">{!! __('La nostra missione? <span class="wab-highlight">Realizzare</span>
                    <span class="wab-highlight">le</span> <span class="wab-highlight">tue</span> <span
                        class="wab-highlight">idee.</span>
                    Scopri chi siamo!')!!}
                </p>
                <hr class="w-25 opacity-100 d-none d-lg-block">
            </div>
        </div>
    </x-slot:text>
    <x-slot:jumboImg>
{{--        <x-bordered-image src="/assets/JumboChiSiamoColor.png" alt="Welcome neon sign"></x-bordered-image>--}}
        <x-neon-graphic text="DO WHAT YOU LOVE"></x-neon-graphic>
    </x-slot:jumboImg>
</x-jumbo>

<x-about-us theme="dark"></x-about-us>

<x-contact background="reverse-contact" theme="light" reverse>
    <x-slot:message class="lead">

    </x-slot:message>
</x-contact>


<x-diagonalAccordion :entries="$accordionOurProcess" theme="dark">
    {!! __('IL NOSTRO LAVORO E&#39 UN <span class="wab-highlight">ARTE')!!}</span>
    <x-slot:small_text>
        {!! __('Ogni progetto che realizziamo è un&acute;<span class="wab-highlight">opera</span> <span
            class="wab-highlight">unica</span>, creata con <span class="wab-highlight">passione</span> e maestria <span
            class="wab-highlight">artigianale.') !!}</span>
    </x-slot:small_text>
</x-diagonalAccordion>
@endsection
