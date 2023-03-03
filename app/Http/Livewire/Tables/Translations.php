<?php

namespace App\Http\Livewire\Tables;

use App\Models\LanguageLine;
use Livewire\Component;
use Livewire\WithPagination;

class Translations extends Component {
  use WithPagination;
  
  public $filterKey = '';
  public $filterGroup = '';
  public $filterPath = '';
  public $withFilters = true;
  public $onlyLast = false;
  
  protected string $paginationTheme = 'bootstrap';
  
  protected $listeners = ['refresh' => "render"];
  
  public function getAreActiveFiltersProperty() {
    return $this->filterKey || $this->filterGroup || $this->filterPath;
  }
  
  public function updatingFilterKey() {
    $this->resetPage();
  }
  
  public function updatingFilterGroup() {
    $this->resetPage();
  }
  
  public function updatingFilterPath() {
    $this->resetPage();
  }
  
  public function filtersReset() {
    $this->filterKey   = '';
    $this->filterGroup = '';
    $this->filterPath  = '';
  }
  
  public function render() {
    $groups = LanguageLine::select("group")->distinct()->get();
    $query  = LanguageLine::orderBy("group")->orderBy("key");
    
    if (isset($this->filterGroup) && $this->filterGroup !== '') {
      $query->where("group", $this->filterGroup);
    }
    
    if ($this->filterKey) {
      $query->where("key", "like", "%{$this->filterKey}%");
    }
    
    if ($this->filterPath) {
      $query->where("path", "like", "%{$this->filterPath}%");
    }
    
    if ($this->onlyLast) {
      $data = LanguageLine::orderBy("created_at", "desc")->limit(10)->get();
    } else {
      $data = $query->paginate();
    }
    
    return view('livewire.tables.translations', [
      'translations' => $data,
      "groups"       => $groups
    ]);
  }
}
