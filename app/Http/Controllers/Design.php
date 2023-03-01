<?php

namespace App\Http\Controllers;

class Design extends Controller
{
    public function index()
    {
        $accordionWhyUs = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "DESIGN DI SITI WEB E MOBILE APP",
                "icon"    => "",
                "content" => "Questo servizio include la progettazione di layout, la scelta dei colori, la selezione dei font, la creazione di icone e immagini, l'organizzazione del contenuto, l'usabilità e l'accessibilità del sito. Il web design è importante perché aiuta a rendere un sito web visivamente attraente, facile da navigare e memorabile per i visitatori."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "LOGO DESIGN E IDENTITÀ VISIVA",
                "icon"    => "",
                "content" => "Consiste nella creazione di un'immagine rappresentativa e memorabile per un brand o un'azienda, utilizzando colori, forme e stili grafici appropriati per il settore di appartenenza e il pubblico di riferimento. Questo servizio comprende la creazione di un logo, il design di una palette di colori, la scelta di un font e l'elaborazione di una serie di elementi grafici coerenti con l'immagine del brand o dell'azienda."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "PROGETTAZIONE DI E-MAIL MARKETING E NEWSLETTER",
                "icon"    => "",
                "content" => "La progettazione di e-mail marketing e newsletter si riferisce alla creazione di layout grafici e contenuti accattivanti per campagne di comunicazione via email. Ci occupiamo di progettare e creare template personalizzati e di alta qualità per le tue attività di email marketing, in modo da coinvolgere i tuoi clienti e massimizzare il tasso di apertura e conversione."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "PROGETTAZIONE DI PRESENTAZIONI E INFOGRAFICHE",
                "icon"    => "",
                "content" => "La progettazione di presentazioni e infografiche è un servizio che ti permette di comunicare le tue informazioni in modo visivamente attraente ed efficace. Con la progettazione di presentazioni, puoi creare slide professionali e coinvolgenti per presentare le tue idee, i tuoi prodotti o servizi in modo chiaro e convincente. Con la progettazione di infografiche, invece, puoi rappresentare dati e informazioni complesse in modo visivo, attraverso grafici, tabelle, immagini e icone, per comunicare messaggi in modo immediato e intuitivo. In questo modo, puoi migliorare la tua comunicazione e attirare l'attenzione del tuo pubblico."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "PROGETTAZIONE DI EBOOK, PUBBLICAZIONI DIGITALI",
                "icon"    => "",
                "content" => "La progettazione di eBook, pubblicazioni digitali e riviste online si riferisce alla creazione di contenuti digitali interattivi come libri e riviste in formato elettronico, con elementi interattivi come immagini, video, suoni e collegamenti ipertestuali. Questi contenuti sono progettati per essere visualizzati su dispositivi mobili o desktop e possono essere utilizzati per finalità commerciali o informative. La progettazione di questi contenuti richiede competenze in design grafico, sviluppo web e user experience."
            ]
        ];

        $cardsServices = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "COS’È IL DIGITAL DESIGN?",
                "icon"    => "",
                "content" => "Il digital design è l'arte di creare contenuti digitali come siti web, app, software, grafica e altro, utilizzando strumenti di progettazione grafica e sviluppo web."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "CHE TIPO DI CONTENUTI DIGITALI POSSO FAR PROGETTARE?",
                "icon"    => "",
                "content" => "Possiamo progettare qualsiasi tipo di contenuto digitale, come siti web, app, software, grafica e altro ancora."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "POSSO RICHIEDERE MODIFICHE AL DESIGN UNA VOLTA COMPLETATO?",
                "icon"    => "",
                "content" => "Sì, il nostro team è sempre disponibile a discutere eventuali modifiche al design una volta completato. Discuteremo le vostre necessità e faremo del nostro meglio per soddisfare le vostre richieste."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "QUALI SONO I TEMPI DI CONSEGNA DEL PROGETTO?",
                "icon"    => "",
                "content" => "I tempi di consegna del progetto dipendono dalla natura e dal livello di complessità del progetto. Il nostro team discuterà con voi la scadenza prevista prima di iniziare il progetto."
            ],
            [
                "id"      => 5,
                "num"     => "05",
                "title"   => "QUANTO COSTA LA PROGETTAZIONE GRAFICA DIGITALE?",
                "icon"    => "",
                "content" => "Il costo del servizio dipende dalla complessità e dalle necessità del progetto. Il nostro team può offrire una consulenza in base alle esigenze specifiche del progetto e fornire un preventivo."
            ]
        ];

        $accordionOurProcess = [
            [
                "id"      => 1,
                "num"     => "01",
                "title"   => "ANALISI",
                "icon"    => "",
                "content" => "In questa fase, esamineremo le vostre esigenze e analizzeremo la vostra attuale strategia di design digitale."
            ],
            [
                "id"      => 2,
                "num"     => "02",
                "title"   => "RICERCA",
                "icon"    => "",
                "content" => "Utilizzeremo le nostre competenze di ricerca per verificare le soluzioni sviluppate e raccogliere dati che ci aiutino a migliorare le nostre prossime soluzioni di design digitale."
            ],
            [
                "id"      => 3,
                "num"     => "03",
                "title"   => "CREAZIONE",
                "icon"    => "",
                "content" => "Utilizzeremo le informazioni raccolte per progettare soluzioni innovative che soddisfino le esigenze del cliente."
            ],
            [
                "id"      => 4,
                "num"     => "04",
                "title"   => "RISULTATI",
                "icon"    => "",
                "content" => "Ci confrontiamo con il cliente per raccogliere feedback e assicurarci che sia conforme alle loro esigenze e se serve facciamo eventuali modifiche."
            ]
        ];

        return view('design', compact('accordionWhyUs', 'cardsServices', 'accordionOurProcess'));
    }
}
