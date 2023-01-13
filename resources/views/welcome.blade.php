<!-- <!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"

>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  @vite(["resources/js/app.js", "resources/styles/app.scss"])
</head>
<body>
<div class="container">
  <h1 class="text-primary">Ciao come va?</h1>
  <h2>asdasd</h2>
  <h3>adadas</h3><h4>asda</h4><h5>asd</h5><h6>asd
    aasd</h6>

  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque consequatur delectus eaque et
    facere ipsum mollitia necessitatibus numquam obcaecati odio praesentium, quibusdam quo quos repudiandae sapiente ut
    vero voluptatibus.</p>

  <button class="btn btn-primary">Ciao</button>
</div>
</body>
</html> -->

@extends('./layouts/public')

@section ('content')
<x-contact/>
<x-accordion/>

@endsection