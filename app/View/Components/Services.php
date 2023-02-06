<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Services extends Component
{
    public $cards = [];
    public $theme = 'light';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cards, $theme = 'light')
    {
        $this->cards = $cards;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.services');
    }
}
