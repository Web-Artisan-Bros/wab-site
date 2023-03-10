<?php

namespace App\Http\Controllers;

use App\Traits\LocalizedRoutesName;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  use LocalizedRoutesName;
  public function index()
  {


    $accordionWhyUs = [
      [
        "id"      => 1,
        "num"     => "01",
        "title"   => "QUALITA’",
        "icon"    => "",
        "content" => "Ci impegniamo per garantire la massima qualità nei nostri prodotti e servizi."
      ],
      [
        "id"      => 2,
        "num"     => "02",
        "title"   => "METODO ARTIGIANALE",
        "icon"    => "",
        "content" => "Ogni progetto è unico, e noi ci adattiamo alle esigenze e alle richieste specifiche di ogni cliente."
      ],
      [
        "id"      => 3,
        "num"     => "03",
        "title"   => "COMPETENZA",
        "icon"    => "",
        "content" => "Il nostro team è composto da professionisti altamente qualificati e costantemente aggiornati sulle ultime tendenze e tecnologie del settore."
      ],
      [
        "id"      => 4,
        "num"     => "04",
        "title"   => "ASSISTENZA POST-LANCIO",
        "icon"    => "",
        "content" => "Offriamo supporto tecnico e assistenza post-vendita per garantire la soddisfazione del cliente anche dopo la consegna del prodotto."
      ],
      [
        "id"      => 5,
        "num"     => "05",
        "title"   => "GIUSTO PREZZO",
        "icon"    => "",
        "content" => "Offriamo prezzi competitivi e trasparenti, senza costi nascosti."
      ]
    ];

    $cardsHome = [
      [
        "id"      => 1,
        "num"     => "01",
        "title"   => "SVILUPPO WEB",
        "routeName"     => "web",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 2,
        "num"     => "02",
        "title"   => "DIGITAL DESIGN",
        "routeName"     => "design",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 3,
        "num"     => "03",
        "title"   => "SVILUPPO SOFTWARE",
        "routeName"     => "software",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 4,
        "num"     => "04",
        "title"   => "SVILUPPO APP MOBILE",
        "routeName"     => "app",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 5,
        "num"     => "05",
        "title"   => "TRASFORMAZIONE DIGITALE",
        "routeName"     => "digital",
        "icon"    => "",
        "content" => ""
      ]
    ];

    $cardsHome = $this->addLocalizationToNames($cardsHome);

    return view('home', compact('accordionWhyUs', 'cardsHome'));
  }
}
