<?php

namespace App\Http\Controllers;

class ChiSiamo extends Controller
{
    public function index()
    {
        $accordionOurProcess = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "IDEA",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "BILANCIO",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "SVILUPPO",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "RISULTATI",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ]
        ];
        return view('chisiamo', compact('accordionOurProcess'));
    }
}
