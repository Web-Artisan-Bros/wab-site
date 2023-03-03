<?php

namespace App\Http\Livewire\Tables;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component {
  use WithPagination;
  
  public $filters = [
    "name"      => "",
    "email"     => "",
    "message"   => "",
    "createdAt" => ""
  ];
  public $withFilters = true;
  public $onlyLast = false;
  
  protected string $paginationTheme = 'bootstrap';
  
  protected $listeners = ['refresh' => "render"];
  
  public function getAreActiveFiltersProperty() {
    return collect($this->filters)->filter()->isNotEmpty();
  }
  
  /**
   * When the filters are updated, reset the page to 1
   *
   * @return void
   */
  public function updatingFilters(): void {
    $this->resetPage();
  }
  
  public function filtersReset() {
    $this->filters = [
      "name"      => "",
      "email"     => "",
      "message"   => "",
      "createdAt" => ""
    ];
  }
  
  public function render() {
    $query = Contact::orderBy("created_at");
    
    if ($this->getAreActiveFiltersProperty()) {
      collect($this->filters)->filter()->each(function ($value, $key) use ($query) {
        switch ($key) {
          case "name":
          case "email":
          case "message":
            $query->where($key, "like", "%{$value}%");
            break;
          case "createdAt":
            $query->where("created_at", "like", "%{$value}%");
            break;
        }
      });
    }
    
    $contacts = $query->paginate();
    
    return view('livewire.tables.contacts',
      [
        'contacts' => $contacts
      ]);
  }
}
