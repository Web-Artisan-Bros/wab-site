<?php

namespace App\Http\Livewire;

use App\Models\LanguageLine;
use Livewire\Component;

class Translations extends Component {
  public $modalTitle = 'Add Translation';
  public $form = [
    'group' => null,
    'key'   => null,
    'text'  => null,
  ];
  
  protected $listeners = ['editClick' => "onEditClick"];
  
  public function render() {
    return view('livewire.translations');
  }
  
  public function upsert() {
    $this->emit("closeModal", "admin.translations.modal.upsert");
    $validatedDate = $this->validate([
      'form.group' => 'required',
      'form.key'   => 'required',
    ]);
    
    LanguageLine::updateOrCreate([
      'group' => $validatedDate['form']['group'],
      'key'   => $validatedDate['form']['key'],
    ], [
      'group' => $validatedDate['form']['group'],
      'key'   => $validatedDate['form']['key'],
      'text'  => ["en" => $validatedDate['form']['key']],
    ]);
    
    $this->onTranslationAdded();
  }
  
  public function onAddClick() {
    $this->modalTitle = 'Aggiungi nuova traduzione';
  }
  
  public function onEditClick() {
    $this->modalTitle = 'Modifica traduzione';
  }
  
  public function onTranslationAdded() {
    // must close modal
    $this->emit("closeModal", "admin.translations.modal.upsert");
    
    // must refresh table data
    $this->emitTo('translations-table', "refresh");
    
    // must reset form
    $this->form = [
      'group' => null,
      'key'   => null,
      'text'  => null,
    ];
  }
}
