@props(['imgCenter'])

<section class="{{$background}}">
  <div class="container container-p-156 dark-text">
    <div class="row">
      <div class="col">
        <div class="ps-3">
          <x-square-btn textBorderColor="bordeTextBlack" reverse="{{$reverse}}">
            {{$imgCenter}}
          </x-square-btn>
        </div>
      </div>
      <div class="col">
        <div class="mb-5">
          <h2 class="fs-3 f-spacing text-start text-dark position-relative z-index1 ">La tua <span class="wab-highlight wab-highlight--secondary">storia</span> attraverso
            un sito che <br>parli di <span class="wab-highlight wab-highlight--secondary">
              te</span></h2>
          <hr class="border-dark opacity-100 w-75">

        </div>
        <div>
          <div class="d-flex">
            <p class="lead text-dark">Qualsiasi cosa per aiutarti a definire la tua presenza online, trasformiamo le tue
              idee e le tue necessità in un prodotto concreto!</p>

          </div>
          <!-- <p class="lead"></p> -->
        </div>
      </div>

    </div>
  </div>


</section>