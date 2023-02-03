@props(['img', 'button'=>''])

<section class="bg-light text-dark">
  <div class="container container-p-156">
    <div class="row pb-sm-5">

      <div class="col">
        {{$slot}}
      </div>
      <div class="col">
        <div class="pt-5 position-relative">
          <img class="w-100 img-border" src="/assets/JumboServiceBorder.png" alt="a yellow border of the img">
          <figure class="h-100">
            <div class="img-area w-100">
              <img class="w-100 img-bw" src="{{ $img }}" alt="Welcome neon sign">
            </div>
          </figure>
        </div>
      </div>
    </div>
    <div>
      {{$cards}}

    </div>
  </div>

</section>