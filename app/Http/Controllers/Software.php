<?php

namespace App\Http\Controllers;

class Software extends Controller
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
                "title"   => "POSSO VEDERE IL SOFTWARE IN FASE DI SVILUPPO?",
                "icon"    => "",
                "content" => "Sì, teniamo il cliente costantemente aggiornato durante tutto il processo di sviluppo e forniamo demo funzionanti del software in modo che il cliente possa monitorare il progresso."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "QUALI LINGUAGGI DI PROGRAMMAZIONE USATE?",
                "icon"    => "",
                "content" => "Utilizziamo i linguaggi di programmazione più comuni a seconda delle esigenze del progetto."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "OFFRITE SUPPORTO POST-LANCIO?",
                "icon"    => "",
                "content" => "Sì, offriamo supporto continuo per il software dopo il lancio, incluso il debug e le modifiche richieste dal cliente."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "QUALI SONO I TEMPI DI CONSEGNA DEL PROGETTO?",
                "icon"    => "",
                "content" => "Il tempo necessario dipende dalle specifiche del progetto e dalla complessità richiesta dal software. Tuttavia, ci impegniamo sempre a rispettare le scadenze concordate con il cliente."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "QUANTO COSTA?",
                "icon"    => "",
                "content" => "I costi dipendono dalle specifiche del progetto e dalle funzionalità richieste dal software. Forniamo sempre preventivi dettagliati prima di iniziare il lavoro, in modo che il cliente possa avere un'idea chiara dei costi associati al progetto."
            ]
        ];

        $accordionOurProcess = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "ANALISI",
                "icon"    => "",
                "content" => "Prima di iniziare a scrivere il codice, analizziamo i requisiti del cliente, progettiamo la soluzione e definiamo le funzionalità."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "SVILUPPO",
                "icon"    => "",
                "content" => "Una volta progettata la soluzione, inizia lo sviluppo vero e proprio del software, seguendo le tecniche e le tecnologie più avanzate."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "TEST",
                "icon"    => "",
                "content" => "Una volta sviluppato il software, eseguiamo un'attenta fase di testing per verificare che tutto funzioni correttamente, e in caso di problemi, risolviamo i bug."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "CONSEGNA",
                "icon"    => "",
                "content" => "Consegniamo il software finito e offriamo supporto per eventuali problemi o richieste di assistenza, garantendo la massima soddisfazione del cliente."
            ]
        ];

        return view('software', compact('cardsServices', 'accordionOurProcess'));
    }
}
