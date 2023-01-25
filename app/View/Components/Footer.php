<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public $background;


    /**
     * Create a new component instance.
     *
     * @param mixed $background
     */
    public function __construct($background)
    {
        $this->background = $background;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
