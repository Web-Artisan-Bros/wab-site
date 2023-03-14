<?php

namespace App\Http\Controllers;

class Digital extends Controller
{
    public function index()
    {
        // $accordionWhyUs = [
        //     [
        //         "id"      => 1,
        //         "num"     => "01",
        //         "title"   => "APP DI E-COMMERCE",
        //         "icon"    => "",
        //         "content" => "Un'applicazione che permette ai clienti di acquistare prodotti direttamente dal loro smartphone, con funzionalità come carrelli della spesa, pagamenti online e gestione degli ordini."
        //     ],
        //     [
        //         "id"      => 2,
        //         "num"     => "02",
        //         "title"   => "APP PER LA PRENOTAZIONE DI APPUNTAMENTI",
        //         "icon"    => "",
        //         "content" => "Un'app che consente ai clienti di prenotare appuntamenti per servizi come parrucchieri, estetisti o medici, con notifiche push per ricordare gli appuntamenti e la possibilità di gestire le prenotazioni."
        //     ],
        //     [
        //         "id"      => 3,
        //         "num"     => "03",
        //         "title"   => "APP FIDELIZZAZIONE CLIENTI",
        //         "icon"    => "",
        //         "content" => "Un'applicazione che premia i clienti per gli acquisti ripetuti, con offerte speciali, sconti e coupon che possono essere utilizzati in negozio o online."
        //     ],
        //     [
        //         "id"      => 4,
        //         "num"     => "04",
        //         "title"   => "APP DI CONSEGNA A DOMICILIO",
        //         "icon"    => "",
        //         "content" => "Un'app che consente ai clienti di ordinare prodotti o cibo e di riceverli a casa propria, con funzionalità come la tracciabilità degli ordini e le notifiche in tempo reale sulla consegna."
        //     ],
        //     [
        //         "id"      => 5,
        //         "num"     => "05",
        //         "title"   => "APP PER EVENTI",
        //         "icon"    => "",
        //         "content" => "Un'applicazione che aiuta a organizzare e promuovere eventi come conferenze, mostre o concerti, con funzionalità come l'acquisto dei biglietti, la gestione degli orari e la condivisione sui social media."
        //     ]
        // ];

        $cardsServices = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "CHE COSA SIGNIFICA TRASFORMAZIONE DIGITALE?",
                "icon"    => "",
                "content" => "La trasformazione digitale è il processo di integrazione di tecnologie digitali nei processi aziendali e nella strategia di business."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "QUALI SONO I BENEFICI DELLA TRASFORMAZIONE DIGITALE PER LA MIA AZIENDA?",
                "icon"    => "",
                "content" => "La trasformazione digitale può portare a una maggiore efficienza, produttività, agilità e competitività, nonché a una migliore esperienza del cliente e a nuove opportunità di business."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "COME INIZIAMO LA TRASFORMAZIONE DIGITALE DELLA NOSTRA AZIENDA?",
                "icon"    => "",
                "content" => "Iniziamo con un'analisi delle esigenze e delle opportunità dell'azienda, quindi identifichiamo le tecnologie e le soluzioni più adatte per raggiungere gli obiettivi di business."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "QUALI SONO I PRINCIPALI OSTACOLI ALLA TRASFORMAZIONE DIGITALE?",
                "icon"    => "",
                "content" => "Gli ostacoli principali possono essere la mancanza di risorse, competenze e cultura digitale all'interno dell'azienda. Affrontiamo questi ostacoli fornendo supporto nella formazione e nell'acquisizione di competenze, nell'integrazione di nuove tecnologie e nella definizione di una strategia di cambiamento."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "QUANTO CI VORRÀ PER LA TRASFORMAZIONE DIGITALE DELLA MIA AZIENDA?",
                "icon"    => "",
                "content" => "Il tempo necessario dipende dalle dimensioni e dalle esigenze dell'azienda, nonché dalle tecnologie e dalle soluzioni da implementare. Forniamo un piano dettagliato con una stima del tempo e delle risorse necessarie per raggiungere gli obiettivi di business."
            ]
        ];

        $accordionOurProcess = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "VALUTAZIONE",
                "icon"    => "",
                "content" => "In questa fase, ci incontriamo con il cliente per capire quali sono le sue esigenze specifiche e valutare il livello di digitalizzazione attuale."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "PROGETTAZIONE",
                "icon"    => "",
                "content" => "Basandoci sulla valutazione delle esigenze, progettiamo una soluzione di trasformazione digitale su misura per il cliente."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "IMPLEMENTAZIONE",
                "icon"    => "",
                "content" => "Una volta concordata la soluzione, passiamo alla fase di implementazione. Qui mettiamo in atto le azioni previste, come l'installazione di software e l'addestramento del personale."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "MONITORAGGIO",
                "icon"    => "",
                "content" => "Una volta implementata la soluzione, monitoriamo il suo funzionamento e forniamo assistenza per eventuali problemi. Inoltre, ci occupiamo di manutenzione e aggiornamenti per mantenere il sistema al passo con le esigenze del cliente."
            ]
        ];

        return view('digital', compact('cardsServices', 'accordionOurProcess'));
    }
}
