<?php

namespace Database\Seeders;

use App\Models\LanguageLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormsSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $validations = [
      'name_required'    => ["en" => "It's hard to contact you without knowing your name", "it" => "E' difficile contattarti senza sapere il tuo nome", "ro" => "Ne este dificil să te contactăm fără a ști numele tău"],
      'name_max'         => ["en" => "The name is a little too long", "it" => "Il nome sembra un po' troppo lungo", "ro" => "Numele pare a fi puțin cam lung"],
      'email_required'   => ["en" => "We absolutely need your email to answer you", "it" => "Abbiamo sicuramente bisogno della tua email per risponderti", "ro" => "Cu siguranță avem nevoie de adresa ta de email pentru a-ți răspunde"],
      'email_email'      => ["en" => "Ooops, there's something strange with your email", "it" => "Ooops, sembra ci sia qualcosa che non va con la mail inserita", "ro" => "Ooops, pare că ceva nu e în regulă cu adresa ta de email"],
      'email_max'        => ["en" => "Wow, what a long email, a bit too long", "it" => "Wow, che email lunga, forse un po' troppo", "ro" => "Wow, ce email lungă, poate un pic prea lungă"],
      'phone_max'        => ["en" => "Oh c'mon, is this really your phone?", "it" => "Ma dai, è davvero questo il tuo telefono?", "ro" => "Las-o baltă, nu cred că ăsta-i numărul tău de telefon!"],
      'message_required' => ["en" => "We're glad you reach out, but tell us something", "it" => "Siamo contenti che ci stai contattando, ma cosa ci vuoi dire?", "ro" => "Ne pare bine că ne contactezi, dar spune-ne ceva"],
    ];
    
    $forms = [
      'name'               => ["en" => "How can we call you?", "it" => "Come ti possiamo chiamare?", "ro" => "Cum te putem numi?"],
      'email'              => ["en" => "At what email can we answer?", "it" => "A quale email ti possiamo rispondere?", "ro" => "La ce adresă de email iți putem răspunde?"],
      'phone'              => ["en" => "Woul'd you provide your phone number?", "it" => "Ci vuoi dare il tuo numero di telefono?", "ro" => "Vrei să ne dai numărul de telefon?"],
      'message'            => ["en" => "What would you like to tell us?", "it" => "Cosa ci vuoi dire?", "ro" => "Ce vrei să ne spui?"],
      'date'               => ["en" => "Date", "it" => "Data", "ro" => "Dată"],
      'required_field_msg' => ["en" => "This fields are the bare minimum ", "it" => "Questi campi sono indispensabili", "ro" => "Aceste informații sunt obligatorii"],
      'send_btn'           => ["en" => "Send", "it" => "Invia", "ro" => "Trimite"],
    ];
    
    foreach ($validations as $key => $value) {
      LanguageLine::updateOrCreate([
        'group' => 'validations',
        'key'   => $key,
      ], [
        'group' => 'validations',
        'key'   => $key,
        'text'  => $value,
      ]);
    }
    
    foreach ($forms as $key => $value) {
      LanguageLine::updateOrCreate([
        'group' => 'forms',
        'key'   => $key,
      ], [
        'group' => 'forms',
        'key'   => $key,
        'text'  => $value,
      ]);
    }
  }
}
