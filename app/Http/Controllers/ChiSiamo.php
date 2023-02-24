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
                "title"   => "DEFINIZIONE",
                "icon"    => "",
                "content" => "Ideazione e definizione: in questa fase, collaboriamo con il cliente per definire gli obiettivi del progetto e stabilire il piano d'azione per raggiungerli."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "SVILUPPO",
                "icon"    => "",
                "content" => "Creazione e sviluppo: in questa fase, utilizziamo tecniche artigianali per creare il software in modo preciso e dettagliato, garantendo la massima qualità e funzionalità."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "VALIDAZIONE",
                "icon"    => "",
                "content" => "Verifica e validazione: una volta completata la fase di sviluppo, testiamo il software in modo approfondito per verificare che funzioni in modo corretto e sia privo di errori."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "RISULTATI",
                "icon"    => "",
                "content" => "Lancio e manutenzione: dopo il lancio del software, forniamo un supporto continuo per assicurare il corretto funzionamento e la manutenzione costante del prodotto, al fine di soddisfare le esigenze del cliente nel tempo."
            ]
        ];
        return view('chisiamo', compact('accordionOurProcess'));
    }
}
