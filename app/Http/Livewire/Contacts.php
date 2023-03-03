<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\LanguageLine;
use Illuminate\View\View;
use Livewire\Component;

class Contacts extends Component {
  public int|null $toDelete;
  public Contact|null $toShow;
  
  protected $listeners = ["showClick" => "onShowClick", "deleteClick" => "onDeleteClick"];
  
  public function render(): View {
    return view('livewire.contacts');
  }
  
  public function onDeleteClick($id) {
    $this->toDelete = $id;
  }
  
  public function onShowClick($id) {
    $this->toShow = Contact::findOrFail($id);
  }
  
  public function onDeleteConfirm() {
    $contact = Contact::findOrFail($this->toDelete);
    $contact->delete();
    
    $this->toDelete = null;
    
    // must close modal
    $this->emit("closeModal", "admin.contacts.modal.delete");
    
    // must refresh table data
    $this->emitTo('tables.contacts', "refresh");
    
    session()->flash('message', 'Contatto eliminata correttamente.');
  }
}
