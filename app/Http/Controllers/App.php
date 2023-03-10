<?php

namespace App\Http\Controllers;

class App extends Controller
{
    public function index()
    {
        $accordionWhyUs = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "APP DI E-COMMERCE",
                "icon"    => "",
                "content" => "Un'applicazione che permette ai clienti di acquistare prodotti direttamente dal loro smartphone, con funzionalità come carrelli della spesa, pagamenti online e gestione degli ordini."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "APP PER LA PRENOTAZIONE DI APPUNTAMENTI",
                "icon"    => "",
                "content" => "Un'app che consente ai clienti di prenotare appuntamenti per servizi come parrucchieri, estetisti o medici, con notifiche push per ricordare gli appuntamenti e la possibilità di gestire le prenotazioni."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "APP FIDELIZZAZIONE CLIENTI",
                "icon"    => "",
                "content" => "Un'applicazione che premia i clienti per gli acquisti ripetuti, con offerte speciali, sconti e coupon che possono essere utilizzati in negozio o online."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "APP DI CONSEGNA A DOMICILIO",
                "icon"    => "",
                "content" => "Un'app che consente ai clienti di ordinare prodotti o cibo e di riceverli a casa propria, con funzionalità come la tracciabilità degli ordini e le notifiche in tempo reale sulla consegna."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "APP PER EVENTI",
                "icon"    => "",
                "content" => "Un'applicazione che aiuta a organizzare e promuovere eventi come conferenze, mostre o concerti, con funzionalità come l'acquisto dei biglietti, la gestione degli orari e la condivisione sui social media."
            ]
        ];

        $cardsServices = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "QUALI PIATTAFORME MOBILE SUPPORTATE?",
                "icon"    => "",
                "content" => "Siamo in grado di sviluppare app per le due piattaforme mobile più diffuse: Android e iOS."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "QUALI SONO I COSTI PER LO SVILUPPO DI UN'APP MOBILE?",
                "icon"    => "",
                "content" => "I costi per lo sviluppo di un'app dipendono da diversi fattori, come la complessità dell'app, il numero di funzionalità richieste, il design e altri. Ti invitiamo a contattarci per una consulenza personalizzata e un preventivo dettagliato."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "CHI PUBBLICHERÀ L'APP SUI RISPETTIVI STORE?",
                "icon"    => "",
                "content" => "Ci occuperemo noi della pubblicazione dell'app sui relativi store, come l'App Store di Apple o il Google Play Store di Android."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "QUALI SONO I TEMPI DI CONSEGNA DEL PROGETTO?",
                "icon"    => "",
                "content" => "Il tempo di sviluppo di un'app mobile dipende dalle funzionalità richieste e dalla complessità dell'app, ma generalmente può richiedere da alcune settimane a diversi mesi."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "POTETE AGGIORNARE E MANTENERE L'APP DOPO IL RILASCIO?",
                "icon"    => "",
                "content" => "Sì, offriamo servizi di manutenzione e aggiornamento delle app, in modo da garantire la loro funzionalità e sicurezza nel tempo."
            ]
        ];

        $accordionOurProcess = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "ANALISI",
                "icon"    => "",
                "content" => "In questo primo step, ci incontriamo con il cliente per comprendere le sue esigenze e specifiche richieste per l&acute;app da sviluppare. Come si suol dire, è meglio un&acute;ora in più di analisi che una settimana in più di sviluppo."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "SVILUPPO",
                "icon"    => "",
                "content" => "Una volta compresi i requisiti, iniziamo la fase di progettazione del software, dove creiamo una sorta di 'mappa' del progetto. Una progettazione accurata ci consente di sviluppare il software in modo efficiente ed evitare sorprese indesiderate."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "TEST",
                "icon"    => "",
                "content" => "Una volta completata la fase di progettazione, inizia la vera e propria creazione del software. Il nostro team altamente qualificato lavora in modo meticoloso per garantire che il software sia esattamente come richiesto dal cliente."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "CONSEGNA",
                "icon"    => "",
                "content" => "Prima di consegnare il software al cliente, effettuiamo test di verifica per assicurarsi che funzioni in modo impeccabile. Siamo molto attenti ai dettagli e vogliamo che il nostro software soddisfi le aspettative del cliente."
            ]
        ];

        return view('app', compact('accordionWhyUs', 'cardsServices', 'accordionOurProcess'));
    }
}
