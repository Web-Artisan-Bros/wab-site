<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SquareBtn extends Component
{
    // public $arrowImg;
    public $textBorderColor;
    public $reverse;
    public $theme;

    /**
     * Create a new component instance.
     *
     * @param mixed $class
     * @param mixed $arrowBg
     * @param mixed $arrowImg
     * @param mixed $textBorderColor
     * @param mixed $reverse
     */
    public function __construct($textBorderColor, $reverse, $theme='light')
    {
        // $this->arrowImg = $arrowImg;
        $this->textBorderColor = $textBorderColor;
        $this->reverse = $reverse;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.square-btn');
    }
}
