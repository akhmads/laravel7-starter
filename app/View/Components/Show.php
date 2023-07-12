<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Show extends Component
{
    /**
     * The input wrapper.
     *
     * @var string
     */
    public $wrap;

    /**
     * The input label.
     *
     * @var string
     */
    public $label;

    /**
     * The input value.
     *
     * @var string
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $value="", $wrap = "v", $label = "" )
    {
        $this->value = $value;
        $this->wrap = $wrap;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.show');
    }
}
