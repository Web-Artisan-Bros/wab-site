<?php

namespace App\Http\Controllers;

class Servizi extends Controller
{
    public function index()
    {
        $accordionWhyUs = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "SITI AZIENDALI",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "SITI PER START UP",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "SITI PROMOZIONALI",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "E-COMMERCE",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "SVILUPPO APP MOBILE",
                "icon"    => "",
                "content" => "il nostro team vanta anni di esperienza nel settore e un team altamente qualificato, garantendo risultati di alta qualità."
            ]
        ];

        $cardsServices = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "QUALI SERVIZI OFFRITE?",
                "icon"    => "",
                "content" => "Offriamo servizi di progettazione e sviluppo web, ottimizzazione SEO, marketing digitale e consulenza per la trasformazione digitale delle aziende. Ci concentriamo su soluzioni personalizzate per ogni cliente, combinando la nostra esperienza artigianale con tecnologie all'avanguardia per ottenere risultati di successo."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "HO GIA' UN SITO, PERCHE' AVREI BISOGNO DI VOI?",
                "icon"    => "",
                "content" => "Offriamo servizi di progettazione e sviluppo web, ottimizzazione SEO, marketing digitale e consulenza per la trasformazione digitale delle aziende. Ci concentriamo su soluzioni personalizzate per ogni cliente, combinando la nostra esperienza artigianale con tecnologie all'avanguardia per ottenere risultati di successo."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "COS'E' UNA TRASFORMAZIONE DIGITALE?",
                "icon"    => "",
                "content" => "Offriamo servizi di progettazione e sviluppo web, ottimizzazione SEO, marketing digitale e consulenza per la trasformazione digitale delle aziende. Ci concentriamo su soluzioni personalizzate per ogni cliente, combinando la nostra esperienza artigianale con tecnologie all'avanguardia per ottenere risultati di successo."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "AVETE ESPERIENZA NEL MIO SETTORE?",
                "icon"    => "",
                "content" => "Offriamo servizi di progettazione e sviluppo web, ottimizzazione SEO, marketing digitale e consulenza per la trasformazione digitale delle aziende. Ci concentriamo su soluzioni personalizzate per ogni cliente, combinando la nostra esperienza artigianale con tecnologie all'avanguardia per ottenere risultati di successo."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "OFFRITE ASSISTENZA POST-VENDITA?",
                "icon"    => "",
                "content" => "Offriamo servizi di progettazione e sviluppo web, ottimizzazione SEO, marketing digitale e consulenza per la trasformazione digitale delle aziende. Ci concentriamo su soluzioni personalizzate per ogni cliente, combinando la nostra esperienza artigianale con tecnologie all'avanguardia per ottenere risultati di successo."
            ]
        ];

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

        // $class = 'black-nav';
        return view('servizi', compact('accordionWhyUs', 'cardsServices', 'accordionOurProcess'));
    }
}
