<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceCard extends Component
{
    public $number;
    public $title;

    /**
     * Create a new component instance.
     *
     * @param mixed $number
     * @param mixed $title
     */
    public function __construct($number, $title)
    {
        $this->number = $number;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.service-card');
    }
}
