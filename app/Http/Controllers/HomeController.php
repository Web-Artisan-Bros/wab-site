<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
  public function index() {
    

    $accordionWhyUs = [
      [
        "id"      => 1,
        "num"     => "01",
        "title"   => "ESPERIENZA CONSOLIDATA",
        "icon"    => "",
        "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
      ],
      [
        "id"      => 2,
        "num"     => "02",
        "title"   => "METODO ARTIGIANALE",
        "icon"    => "",
        "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
      ],
      [
        "id"      => 3,
        "num"     => "03",
        "title"   => "AUMENTO DEI PROFITTI",
        "icon"    => "",
        "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
      ],
      [
        "id"      => 4,
        "num"     => "04",
        "title"   => "ASSISTENZA POST-LANCIO",
        "icon"    => "",
        "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
      ],
      [
        "id"      => 5,
        "num"     => "05",
        "title"   => "GIUSTO PREZZO",
        "icon"    => "",
        "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
      ]
    ];

    $cardsHome = [
      [
        "id"      => 1,
        "num"     => "01",
        "title"   => "COSTRUIAMO SITI WEB UNICI",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 2,
        "num"     => "02",
        "title"   => "MARKETING MIRATO SUI SOCIAL MEDIA",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 3,
        "num"     => "03",
        "title"   => "OTTIMIZAZIONE PER IL MOTORI DI RICERCA (SEO)",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 4,
        "num"     => "04",
        "title"   => "CREAZIONE DESIGN UNICI",
        "icon"    => "",
        "content" => ""
      ],
      [
        "id"      => 5,
        "num"     => "05",
        "title"   => "PACHETTI BUSINESS ",
        "icon"    => "",
        "content" => ""
      ]
    ];

    return view('home', compact('accordionWhyUs', 'cardsHome'));
  }
}
