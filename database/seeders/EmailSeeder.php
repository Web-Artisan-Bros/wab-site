<?php

namespace Database\Seeders;

use App\Models\LanguageLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmailSeeder extends Seeder {
  private array $mails = [
    "contact-client-review" => [
      "subject"  => ["en" => "Thank you for reaching out!", "it" => "Grazie per averci contattato", "ro" => "Vă mulțumim pentru că ne-ați contactat!"],
      "greeting" => ["en" => "Dear :name,", "it" => "Gentile :name,", "ro" => "Stimat :name,"],
      "message"  => ["en" => "thank you for reaching out!<br>We'll review you request and answer as soon as possibile.<br><br>In the meanwhile here are the information we received:",
                     "it" => "grazie per averci contattato!<br>Leggeremo la tua richiesta e ti risponderemo al più presto.<br><br>Nel frattempo, ecco le informazioni che abbiamo ricevuto:",
                     "ro" => "vă mulțumim pentru că ne-ați<br>contactat! Vom analiza cererea și vă vom răspunde cât mai curând posibil.<br><br>Între timp, aici sunt informațiile pe care le-am primit:"],
      "bye"      => ["en" => "Best regards", "it" => "Cordialmente", "ro" => "Cu stimă"],
    ],
    "contact-admin-notify"  => [
      "subject"  => ["en" => "WAB - Contact from :name", "it" => "WAB - Contatto da :name", "ro" => "WAB - Contact de la :name"],
      "greeting" => ["en" => "Dear WAB,", "it" => "Gentile WAB,", "ro" => "Stimat WAB,"],
      "message"  => ["en" => "the user <strong>:name</strong> has sent you a message.<br>Here are the relative information:",
                     "it" => "l'utente <strong>:name</strong> ti ha inviato un messaggio.<br>Ecco le informazioni relative:",
                     "ro" => "utilizatorul :name ți-a trimis un mesaj.<br>Aici sunt informațiile relative:"],
      "bye"      => ["en" => "Best regards", "it" => "Cordialmente", "ro" => "Cu stimă"],
    ]
  ];
  
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    foreach ($this->mails as $mailGroup => $lines) {
      $group = "mail_" . $mailGroup;
      
      foreach ($lines as $key => $value) {
        LanguageLine::updateOrCreate([
          'group' => $group,
          'key'   => $key,
        ], [
          'group'     => $group,
          'key'       => $key,
          'text'      => $value,
        ]);
      }
    }
    
  }
}
