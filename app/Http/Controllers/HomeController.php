<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {


    $accordionWhyUs = [
      [
        "id"      => 1,
        "num"     => "01",
        "title"   => "QUALITA’",
        "icon"    => "quality.png",
        "content" => "Ci impegniamo per garantire la massima qualità nei nostri prodotti e servizi."
      ],
      [
        "id"      => 2,
        "num"     => "02",
        "title"   => "METODO ARTIGIANALE",
        "icon"    => "artisanal.png",
        "content" => "Ogni progetto è unico, e noi ci adattiamo alle esigenze e alle richieste specifiche di ogni cliente."
      ],
      [
        "id"      => 3,
        "num"     => "03",
        "title"   => "COMPETENZA",
        "icon"    => "competenze.png",
        "content" => "Il nostro team è composto da professionisti altamente qualificati e costantemente aggiornati sulle ultime tendenze e tecnologie del settore."
      ],
      [
        "id"      => 4,
        "num"     => "04",
        "title"   => "ASSISTENZA POST-LANCIO",
        "icon"    => "assistance.png",
        "content" => "Offriamo supporto tecnico e assistenza post-vendita per garantire la soddisfazione del cliente anche dopo la consegna del prodotto."
      ],
      [
        "id"      => 5,
        "num"     => "05",
        "title"   => "GIUSTO PREZZO",
        "icon"    => "money.png",
        "content" => "Offriamo prezzi competitivi e trasparenti, senza costi nascosti."
      ]
    ];

    $cardsHome = [
      [
        "id"      => 1,
        "num"     => "01",
        "title"   => "SVILUPPO WEB",
        "url"     => "/web",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 2,
        "num"     => "02",
        "title"   => "DIGITAL DESIGN",
        "url"     => "/design",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 3,
        "num"     => "03",
        "title"   => "SVILUPPO SOFTWARE",
        "url"     => "/software",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 4,
        "num"     => "04",
        "title"   => "SVILUPPO APP MOBILE",
        "url"     => "/app",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 5,
        "num"     => "05",
        "title"   => "TRASFORMAZIONE DIGITALE",
        "url"     => "/digital",
        "icon"    => "",
        "content" => ""
      ]
    ];

    return view('home', compact('accordionWhyUs', 'cardsHome'));
  }
}
