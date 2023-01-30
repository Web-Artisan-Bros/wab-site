@extends('./layouts/public')

@section ('content')
<x-navlink background="white-nav" logo="/assets/NavLogoYB.svg" />

<x-jumbo class="bg-light" dnone="false" reverseJumbo="">
 <x-slot:textBorderColor>
  bordeTextBlack
 </x-slot:textBorderColor>
 <x-slot:reverse>
  btn-hover
 </x-slot:reverse>
 <x-slot:imgCenter>
  /assets/YellowArrow.svg
 </x-slot:imgCenter>
 <x-slot:text>
  <div class="mb-5">
   <h1 class="text-dark">DIAMO <span class="wab-highlight">VITA</span> AI TUOI <span class="wab-highlight">DESIDERI</span></h1>
  </div>
  <div>
   <div class="d-flex">
    <p class="lead text-dark">Aiutiamo il tuo business a farsi <span class="wab-highlight text-dark">notare</span> in un mondo digitale</p>
    <hr class="w-25 opacity-100">
   </div>
  </div>
 </x-slot:text>
 <x-slot:jumboImg class="wab-img">
  <div class="pt-5 position-relative d-flex wab-img">
   <img class="img-border" src="/assets/JumboServiziBorder.png" alt="a yellow border of the img">
   <figure class="">

    <img class="img-bw" src="/assets/JumboServiziColor.png" alt="Welcome neon sign">

   </figure>
  </div>

 </x-slot:jumboImg>
</x-jumbo>

<x-accordion :entries="$accordionWhyUs" />

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

<x-footer background="white-footer" />
@endsection