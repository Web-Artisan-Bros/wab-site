<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DiagonalAccordion extends Component
{
    public $theme;
    public $entries = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($entries, $theme = 'dark')
    {
        $this->theme = $theme;
        $this->entries = $entries;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.diagonal-accordion');
    }
}
