@extends('./layouts/public')

@section ('content')
<x-navlink background="yellow-nav" logo="/assets/NavLogoR.svg" />

<section class="bg-primary">
 <div class="container container-p-156">
  <div class="row flex-row-reverse pb-sm-5">
   <div class="col">
    <div class="ps-3">
     <x-square-btn arrowImg="/assets/WhiteArrow.svg" textBorderColor="bordeTextBlack" reverse=" btn-hover justify-content-end" />
    </div>
   </div>
   <div class="col">
    <div class="mb-5">

     <h1 class=" text-dark">SIAMO <span class="text-dark wab-highlight wab-highlight--secondary">
       WEB </span><span class="text-dark wab-highlight wab-highlight--secondary">
       ARTISAN </span><span class="text-dark wab-highlight wab-highlight--secondary">
       BROS</span></h1>
    </div>
    <div>
     <div class="d-flex flex-row-reverse">
      <p class="lead text-dark">Aiutiamo il tuo business a farsi <span class="wab-highlight wab-highlight--secondary">notare</span> in un mondo digitale</p>
      <hr class="w-25 opacity-100 secondary-hr">
     </div>
    </div>
   </div>
  </div>
  <div class="pt-5 position-relative">
   <img class="w-100 img-border" src="/assets/JumboChiSiamoBorder.png" alt="a yellow border of the img">
   <figure class="h-100">
    <div class="img-area w-100">
     <img class="w-100 img-bw" src="/assets/JumboChiSiamoColor.png" alt="Welcome neon sign">
    </div>
   </figure>
  </div>
 </div>
</section>

<x-footer background="yellow-footer" />
@endsection