@extends('./layouts/public')

@php
    $theme = 'yellow';
    $navbarVariant = 'yellow';
    $pageTitle = 'Chi siamo';
@endphp

@section('content')

    <x-jumbo dnone="true" reverseJumbo="flex-lg-row-reverse" theme="yellow">
        <x-slot:reverse>
            btn-reverse-white
        </x-slot:reverse>
        <x-slot:text>
            <div class="mb-3 mb-lg-5">
                <h1>SIAMO <span class="wab-highlight">
                        WEB</span>&nbsp;<span class="wab-highlight">
                        ARTISAN</span>&nbsp;<span class="wab-highlight">BROS</span></h1>
            </div>
            <div>
                <div class="d-flex flex-lg-row flex-column align-items-center">
                    <p class="lead text-dark">Aiutiamo il tuo business a farsi <span
                            class="wab-highlight">notare</span> in un mondo digitale</p>
                    <hr class="w-25 opacity-100 d-none d-lg-block">
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
