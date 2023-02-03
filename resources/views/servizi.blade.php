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

<x-accordion class="dark-accordion" :entries="$accordionWhyUs" />

<x-services img="/assets/JumboService01.png" :cards="$cardsServices">
 <x-slot:cards>
  <div class="services pt-3">
   <div class="d-flex align-content-center">
    <div class="wrapper">
     <div class="eye">
      <img src="/assets/BigArrow.svg" alt="">
     </div>
    </div>
    <!-- <div class="align-self-center">
     <img src="/assets/BigArrow.svg" alt="big arrow">
    </div> -->
    <div class="tab-content row ps-5 ms-1" id="v-pills-tabContent">
     @foreach($cardsServices as $entry)
     <div class="tab-pane fade" id="v-pills-{{ $entry['id'] }}" role="tabpanel" aria-labelledby="v-pills-{{ $entry['id'] }}-tab" tabindex="{{ $entry['id'] }}">
      <div class="fs-4 text-primary mb-3">{{ $entry["num"] }}. {{ strtoupper($entry["title"]) }}</div>
      {{ $entry['content'] }}
     </div>
     @endforeach
    </div>
   </div>
   <div class="row">
    <div class="nav nav-pills " id="v-pills-tab" role="tablist" aria-orientation="orizontal">
     @foreach($cardsServices as $entry)
     <button class="nav-link col" id="v-pills-{{ $entry['id'] }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $entry['id'] }}" type="button" role="tab" aria-controls="v-pills-{{ $entry['id'] }}" aria-selected="true">
      <div class="card h-100 service-card">
       <div class="border-bottom border-3 border-primary">
        <h4 class="text-dark text-end">{{ $entry["num"] }}.</h4>
       </div>
       <div class="card-body">
        <h5 class="card-title h-100">{{ strtoupper($entry["title"]) }}</h5>
       </div>
      </div>
     </button>
     @endforeach
    </div>
   </div>
  </div>




 </x-slot:cards>

 <div class="mb-5">
  <h2 class="text-dark position-relative z-index1 mb-4"><span class="wab-highlight">FAQ</span></h2>
  <h2 class="text-dark position-relative z-index1">DOM<span class="wab-highlight z-index-none">A</span>NDE</h2>
  <h2 class="text-dark position-relative z-index1"><span class="wab-highlight z-index-none">F</span>RE<span class="wab-highlight z-index-none">Q</span>UENTI</h2>
 </div>
 <div>
  <div class="d-flex">
   <hr class="w-25 opacity-100">
   <p class="lead ms-2">Ecco alcune domande frequenti</p>
  </div>
 </div>


</x-services>

<x-contact class="mt-4" background="bg-primary">
 <x-slot:reverse>
  btn-hover
 </x-slot:reverse>
 <x-slot:imgCenter>
  /assets/WhiteArrow.svg
 </x-slot:imgCenter>
</x-contact>


<section class="bg-dark">
 <div class="container container-p-156 overflow-hidden">
  <div class="row">
   <div class="col"></div>
   <div class="col-5">
    <h2 class="">ECCO IL NOSTRO PROCESSO <span class="wab-highlight text-dark">ARTIGIANALE</span></h2>
    <div class="d-flex flex-row-reverse align-items-center">
     <p class="lead ps-3">soluzioni personalizzate e artigianali per ogni cliente. esperienza e tecnologie all'avanguardia.</p>
     <hr class="w-25 opacity-100 primary-hr">
    </div>
   </div>
  </div>


  <div class="wabDa">
   <div class="d-flex row">
    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
     @foreach($accordionOurProcess as $entry)
     <button class="nav-link" id="v-pillss-{{ $entry['id'] }}-tab" data-bs-toggle="pill" data-bs-target="#v-pillss-{{ $entry['id'] }}" type="button" role="tab" aria-controls="v-pills-{{ $entry['id'] }}" aria-selected="true">
      <div class="position-relative w-100">
       <div class="positioning">
        <div class="text">
         <div class="number">{{ $entry["num"] }}.</div>
         <div class="fs-4">{{ strtoupper($entry["title"]) }}</div>
        </div>
        <x-svg-icon class="arrow ms-3" icon="VectorArrowWhiteD"></x-svg-icon>
       </div>
      </div>
     </button>
     @endforeach
    </div>
   </div>
   <div class="tab-content row" id="v-pills-tabContent">
    @foreach($accordionOurProcess as $entry)
    <div class="tab-pane fade" id="v-pillss-{{ $entry['id'] }}" role="tabpanel" aria-labelledby="v-pillss-{{ $entry['id'] }}-tab" tabindex="0">
     <div class="d-flex flex-column mb-3">
      <div class="number fs-4 text-primary">{{ $entry["num"] }}.</div>
      <div class="fs-4 text-primary">{{ strtoupper($entry["title"]) }}</div>
     </div>
     {{ $entry['content'] }}
    </div>
    @endforeach
   </div>
  </div>


 </div>
</section>

<!-- <section class="body">
 <div class="box">
  <div class="eye"></div>
  <div class="eye"></div>
 </div>
</section> -->

<!-- <section class="moovingArrow">
 <img src="/assets/BigArrow.png" alt="" class="arrow">

</section> -->


<!-- <section class="body position-relative">
 <div class="container">

  <img src="/assets/BigArrow.png" alt="" class="iris">
 </div>
</section> -->


<!-- <section class="body">
 <div class="container">
  <div class="eyeBall">
   <div class="iris"></div>
  </div>
  <div class=""></div>
  <div class="lid"></div>
 </div>
</section> -->

<!-- <script type="text/javascript">
 const eye = document.querySelector('.iris');
 window.addEventListener('mousemove', (event) => {
  const x = -(window.innerWidth / 2 - event.pageX) / 35;
  const y = -(window.innerHeight / 2 - event.pageY) / 35;
  eye.style.transform = `rotate(-45deg) translateY(${y}px) translateX(${x}px)`;
 });
 // document.querySelector('body').addEventListener('mousemove', eyeball);

 // function eyeball() {
 //  const eye = document.querySelectorAll('.eye');
 //  eye.forEach(function(eye) {
 //   let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2);
 //   let y = (eye.getBoundingClientRect().top) + (eye.clientHeight / 2);
 //   let radian = Math.atan2(event.pageX - x, event.pageY - y);
 //   let rotation = (radian * (180 / Math.PI) * -1) + 270;
 //   eye.style.transform = "rotate(" + rotation + "deg)"

 //  });
 // }





 // document.querySelector('.moovingArrow').addEventListener('mousemove', rotateArrow);

 // function rotateArrow() {
 // let arrow = document.querySelectorAll('.arrow');

 // arrow.forEach(function(arrow) {
 // let x = (arrow.getBoundingClientRect().left) + (arrow.clientWidth / 2);
 // let y = (arrow.getBoundingClientRect().top) + (arrow.clientHeight / 2);

 // let radian = Math.atan2(event.pageX - x, event.pageY - y);
 // let rot = (radian * (180 / Math.PI) * -1) + 270;
 // arrow.style.transform = "rotate(" + rot + "deg)";
 // })
 // }
</script> -->

<script>
 //Selecting the eye div
 let eye_ref = document.querySelectorAll(".eye");

 //mousemove for devices with mouse aand touchmove for touchcreen devices
 let events = ["mousemove", "touchmove"];

 //Check for touch screen
 function isTouchDevice() {
  try {
   document.createEvent("TouchEvent");
   return true;
  } catch (e) {
   return false;
  }
 }

 //Same function for both events
 events.forEach((eventType) => {
  document.body.addEventListener(eventType, (event) => {
   eye_ref.forEach((eye) => {
    /* getBoundingClientRect() method returns the position relative to the viewport */
    let eyeX = eye.getBoundingClientRect().left + eye.clientWidth / 2;
    let eyeY = eye.getBoundingClientRect().top + eye.clientHeight / 2;

    /* ClientX and ClientY return the position of clients cursor from top left of the screen*/
    var x = !isTouchDevice() ? event.clientX : event.touches[0].clientX;
    var y = !isTouchDevice() ? event.clientY : event.touches[0].clientY;

    /* 
    Subtract x position of mouse from x position of eye and y position of mouse from y position of eye.
    Use atan2(returns angle in radians)
    */

    let radian = Math.atan2(x - eyeX, y - eyeY);
    //Convert Radians to Degrees
    let rotationDegrees = radian * (180 / Math.PI) * -1 + 40;
    //Rotate the eye
    eye.style.transform = "rotate(" + rotationDegrees + "deg)";
   });
  });
 });
</script>

<x-footer background="white-footer" />
@endsection