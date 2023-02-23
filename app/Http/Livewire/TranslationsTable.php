<?php

namespace App\Http\Livewire;

use App\Models\LanguageLine;
use Livewire\Component;
use Livewire\WithPagination;

class TranslationsTable extends Component {
  use WithPagination;
  
  public $filterKey = '';
  public $filterGroup = '';
  
  protected string $paginationTheme = 'bootstrap';
  
  public function getAreActiveFiltersProperty() {
    return $this->filterKey || $this->filterGroup;
  }
  
  public function updatingFilterKey() {
    $this->resetPage();
  }
  
  public function updatingFilterGroup() {
    $this->resetPage();
  }
  
  public function filtersReset() {
    $this->filterKey = '';
    $this->filterGroup = '';
  }
  
  public function render() {
    $groups = LanguageLine::select("group")->distinct()->get();
    $query  = LanguageLine::orderBy("group")->orderBy("key");
    
    if ($this->filterGroup) {
      $query->where("group", $this->filterGroup);
    }
    if ($this->filterKey) {
      $query->where("key", "like", "%{$this->filterKey}%");
    }
    
    $data = $query->paginate();
    
    return view('livewire.translations-table', [
      'translations' => $data,
      "groups"       => $groups
    ]);
  }
}
