<?php

namespace App\Http\Livewire;

use App\Models\LanguageLine;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class Translations extends Component {
  public string $modalTitle = 'Aggiungi nuova traduzione';
  public string $modalSaveButton = "Salva";
  public int $modalActiveTab = 0;
  public array $form = [
    'group' => null,
    'key'   => null,
    'texts' => null,
  ];
  public array $availableLangs;
  public int|null $toDelete;
  
  
  protected $listeners = ['editClick' => "onEditClick", "deleteClick" => "onDeleteClick"];
  
  public function __construct($id = null) {
    parent::__construct($id);
    
    $this->availableLangs = config('app.validLocales');
    
    foreach ($this->availableLangs as $lang) {
      $this->form['texts'][$lang['code']] = "";
    }
  }
  
  public function render() {
    return view('livewire.translations');
  }
  
  public function upsert() {
    $validatedDate = $this->validate([
      'form.group' => 'required',
      'form.key'   => 'required',
      "form.texts" => "array"
    ]);
    
    LanguageLine::updateOrCreate([
      'group' => $validatedDate['form']['group'],
      'key'   => $validatedDate['form']['key'],
    ], [
      'group' => $validatedDate['form']['group'],
      'key'   => $validatedDate['form']['key'],
      'text'  => $validatedDate['form']["texts"],
    ]);
  
    $this->emit("closeModal", "admin.translations.modal.upsert");
    
    $this->onTranslationAdded();
  }
  
  public function onAddClick() {
    $this->modalTitle      = 'Aggiungi nuova traduzione';
    $this->modalSaveButton = "Aggiungi";
  }
  
  public function onEditClick(LanguageLine $languageLine) {
    $this->modalTitle      = 'Modifica traduzione';
    $this->modalSaveButton = "Salva";
    
    $this->form = [
      'group' => $languageLine->group,
      'key'   => $languageLine->key,
      'texts' => $languageLine->text,
    ];
  }
  
  public function onDeleteClick($id) {
    $this->toDelete = $id;
  }
  
  public function onDeleteConfirm() {
    $languageLine = LanguageLine::findOrFail($this->toDelete);
    $languageLine->delete();
    
    $this->toDelete = null;
    
    // must close modal
    $this->emit("closeModal", "admin.translations.modal.delete");
    
    // must refresh table data
    $this->emitTo('translations-table', "refresh");
    
    session()->flash('message', 'Traduzione eliminata correttamente.');
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
    
    $this->modalActiveTab = 0;
    
    session()->flash('message', 'Traduzione salvata correttamente.');
  }
  
  public function onRescanClick() {
    Artisan::call("localize:store");
    
    session()->flash('message', 'Scansione completata.');
  }
 
}
