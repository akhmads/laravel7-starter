<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FlashAlert extends Component
{
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.flash-alert');
    }
}
