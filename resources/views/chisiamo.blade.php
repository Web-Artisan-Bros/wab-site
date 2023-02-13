@extends('./layouts/public')

@php
    $theme = 'yellow';
    $navbarVariant = 'yellow';
    $pageTitle = 'Chi siamo';
@endphp

@section('content')
    <x-jumbo dnone="true" reverseJumbo="flex-row-reverse" theme="yellow">
        <x-slot:reverse>
            btn-reverse-white
        </x-slot:reverse>
        <x-slot:text>
            <div class="mb-5">
                <h1 class="text-dark">SIAMO <span class="text-dark wab-highlight wab-highlight--secondary">
                        WEB </span><span class="text-dark wab-highlight wab-highlight--secondary">
                        ARTISAN</span> <span class="text-dark wab-highlight wab-highlight--secondary">BROS</span></h1>
            </div>
            <div>
                <div class="d-flex">
                    <p class="lead text-dark">Aiutiamo il tuo business a farsi <span
                            class="wab-highlight wab-highlight--secondary text-dark">notare</span> in un mondo digitale</p>
                    <hr class="w-25 opacity-100">
                </div>
            </div>
        </x-slot:text>
        <x-slot:jumboImg>
            <img class="w-100 img-border" src="/assets/JumboChiSiamoBorder.png" alt="a yellow border of the img">
            <figure class="h-100">
                <div class="img-area w-100">
                    <img class="w-100 img-bw" src="/assets/JumboChiSiamoColor.png" alt="Welcome neon sign">
                </div>
            </figure>

        </x-slot:jumboImg>
    </x-jumbo>

    <x-about-us theme="dark"></x-about-us>

    <x-contact background="reverse-contact" theme="light">
        <x-slot:reverse>
            btn-reverse-white
        </x-slot:reverse>
        <x-slot:message class="lead">

        </x-slot:message>
    </x-contact>


    <x-diagonalAccordion :entries="$accordionOurProcess" theme="dark">

    </x-diagonalAccordion>
@endsection
