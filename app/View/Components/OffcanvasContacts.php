<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OffcanvasContacts extends Component
{
    public string $theme;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($theme = 'light')
    {
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.offcanvas-contacts');
    }
}
