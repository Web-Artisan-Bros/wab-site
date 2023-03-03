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
    'text' => null,
  ];
  public array $availableLangs;
  public int|null $toDelete;
  public LanguageLine|null $showingLine;
  
  protected $listeners = ['editClick' => "onEditClick", "deleteClick" => "onDeleteClick"];
  
  public function __construct($id = null) {
    parent::__construct($id);
    
    $this->availableLangs = config('app.validLocales');
    
    foreach ($this->availableLangs as $lang) {
      $this->form['text'][$lang['code']] = "";
    }
  }
  
  public function render() {
    return view('livewire.translations');
  }
  
  public function upsert() {
    $validatedDate = $this->validate([
      'form.group' => 'required',
      'form.key'   => 'required',
      "form.text"  => "array",
      "form.path"  => "string"
    ]);
  
    if (isset($this->showingLine)) {
      $this->showingLine->update($validatedDate['form']);
    } else {
      LanguageLine::create($validatedDate['form']);
    }
  
    $this->emit("closeModal", "admin.translations.modal.upsert");
    
    $this->onTranslationAdded();
  }
  
  public function onAddClick() {
    $this->modalTitle      = 'Aggiungi nuova traduzione';
    $this->modalSaveButton = "Aggiungi";
    $this->resetForm();
  }
  
  public function onEditClick(LanguageLine $languageLine) {
    $this->modalTitle      = 'Modifica traduzione';
    $this->modalSaveButton = "Salva";
  
    $this->form = [
      'group' => $languageLine->group,
      'key'   => $languageLine->key,
      'text' => $languageLine->text,
    ];
  
    $this->showingLine = $languageLine;
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
    $this->emitTo('tables.translations', "refresh");
    
    session()->flash('message', 'Traduzione eliminata correttamente.');
  }
  
  public function onTranslationAdded() {
    // must close modal
    $this->emit("closeModal", "admin.translations.modal.upsert");
  
    // must refresh table data
    $this->emitTo('translations-table', "refresh");
  
    $this->resetForm();
  
    session()->flash('message', 'Traduzione salvata correttamente.');
  }
  
  public function onRescanClick() {
    Artisan::call("localize:store");
    
    session()->flash('message', 'Scansione completata.');
  
    // must refresh table data
    $this->emitTo('tables.translations', "refresh");
  }
 
  public function resetForm() {
    // must reset form
    $this->form = [
      'group' => null,
      'key'   => null,
      'text'  => null,
    ];
  
    $this->showingLine = null;
  
    $this->modalActiveTab = 0;
  }
}
