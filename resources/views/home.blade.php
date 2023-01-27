@extends('./layouts/public')



@section ('content')
<x-navlink background="dark-nav" logo="/assets/NavLogoYW.svg" />

<x-jumbo dnone="true">
  <x-slot:textBorderColor>
    bordeTextWhite
  </x-slot:textBorderColor>
  <x-slot:reverse>
    btn-hover
  </x-slot:reverse>
  <x-slot:imgCenter>
    /assets/YellowArrow.svg
  </x-slot:imgCenter>
  <x-slot:text>
    <div class="mb-5">
      <h1 class="">WEB DESIGN</h1>
      <h2 class="fs-3 f-spacing ">PERSONALIZZATO</h2>
      <h2 class="">E <span class="text-dark wab-highlight">
          ARTIGIANALE</span></h2>
    </div>
    <div>
      <div class="d-flex">
        <p class="lead">Aiutiamo il tuo business a farsi <span class="wab-highlight text-dark">notare</span> in un mondo digitale</p>
        <hr class="w-25 opacity-100">
      </div>
    </div>
  </x-slot:text>
  <x-slot:jumboImg>
    <img class="w-100 img-border" src="/assets/JumboHomeBorder.png" alt="a yellow border of the img">
    <figure class="h-100">
      <div class="img-area w-100">
        <img class="w-100 img-bw" src="/assets/JumboHomeColor.png" alt="Welcome neon sign">
      </div>
    </figure>

  </x-slot:jumboImg>
</x-jumbo>

<x-services />

<x-contact class="mt-4" background="bg-primary">
  <x-slot:reverse>
    btn-hover
  </x-slot:reverse>
  <x-slot:imgCenter>
    /assets/WhiteArrow.svg
  </x-slot:imgCenter>
</x-contact>
<x-accordion :entries="$accordionWhyUs" />
<x-footer background="dark-footer" />


@endsection