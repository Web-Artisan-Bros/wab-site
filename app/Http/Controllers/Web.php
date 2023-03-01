<?php

namespace App\Http\Controllers;

class Web extends Controller
{
    public function index()
    {
        $accordionWhyUs = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "SITI AZIENDALI",
                "icon"    => "",
                "content" => "Questi sono siti web progettati per le aziende che vogliono avere una presenza online per promuovere i loro prodotti o servizi."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "SITI PERSONALI",
                "icon"    => "",
                "content" => "Questi sono siti web che le persone possono utilizzare per creare un curriculum online, condividere informazioni personali o promuovere i loro hobby."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "SITI PROMOZIONALI",
                "icon"    => "",
                "content" => "Questi sono siti web per pubblicizzare un prodotto od un evento."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "E-COMMERCE",
                "icon"    => "",
                "content" => "Questi sono siti web che consentono alle aziende di vendere i loro prodotti o servizi online."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "BLOG",
                "icon"    => "",
                "content" => "Questi sono siti web che presentano articoli e contenuti informativi su argomenti specifici."
            ]
        ];

        $cardsServices = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "QUALI SONO I VANTAGGI DI AVERE UN SITO WEB PROFESSIONALE?",
                "icon"    => "",
                "content" => "Un sito web professionale può fornire una forte presenza online per la tua attività, consentire ai clienti di trovare facilmente informazioni sui tuoi prodotti o servizi e migliorare la tua credibilità nel mercato."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "HO GIÀ UN SITO, PERCHÉ AVREI BISOGNO DI VOI?",
                "icon"    => "",
                "content" => "Anche se hai già un sito web, la nostra agenzia può aiutarti a migliorarlo e renderlo più efficace. Possiamo fornire un'ampia gamma di servizi, come la progettazione e sviluppo di nuove funzionalità, l'ottimizzazione SEO, il supporto tecnico, e molto altro ancora."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "COSA DEVO FORNIRE PER LA CREAZIONE DEL MIO SITO WEB?",
                "icon"    => "",
                "content" => "In genere, dovrai fornire testo e immagini di alta qualità relativi ai tuoi prodotti o servizi, il tuo logo e i colori della tua azienda. Potremmo anche richiedere accesso ai tuoi account social media e di hosting."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "QUANTO TEMPO CI VUOLE PER SVILUPPARE UN SITO WEB?",
                "icon"    => "",
                "content" => "Il tempo necessario per lo sviluppo di un sito web dipende dalle esigenze specifiche del cliente, dalla complessità del progetto e dalle funzionalità richieste. Tuttavia, cerchiamo sempre di rispettare le scadenze concordate con il cliente."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "OFFRITE SUPPORTO POST VENDITA?",
                "icon"    => "",
                "content" => "Dopo il lancio del sito web, offriamo supporto tecnico e assistenza per eventuali problemi tecnici o domande che possano sorgere. Inoltre, possiamo offrire servizi di gestione e manutenzione del sito web per garantirne la massima efficienza e funzionalità nel tempo."
            ]
        ];

        $accordionOurProcess = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "ANALISI",
                "icon"    => "",
                "content" => "In questa fase, analizziamo le esigenze del cliente e pianifichiamo il progetto in modo dettagliato, per garantire che il risultato finale sia in linea con le sue aspettative."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "SVILUPPO",
                "icon"    => "",
                "content" => "In questa fase, progettiamo e sviluppiamo il software utilizzando tecniche artigianali avanzate, per garantire la massima qualità del risultato finale."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "TEST",
                "icon"    => "",
                "content" => "Una volta completata la fase di sviluppo, effettuiamo test rigorosi per verificare che il software funzioni senza problemi e sia privo di errori o bug."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "LANCIO",
                "icon"    => "",
                "content" => "Dopo il completamento del progetto, forniamo un supporto continuo per garantire che il software funzioni senza problemi e sia sempre aggiornato, per soddisfare le esigenze del cliente nel lungo periodo."
            ]
        ];

        return view('web', compact('accordionWhyUs', 'cardsServices', 'accordionOurProcess'));
    }
}
