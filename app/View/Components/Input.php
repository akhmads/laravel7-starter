<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * The input name
     *
     * @var string
     */
    public $name;

    /**
     * The input value
     *
     * @var string
     */
    public $value;

    /**
     * The input type
     *
     * @var string
     */
    public $type;

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
     * The input classes.
     *
     * @var string
     */
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $name="", $value="", $type = "text", $wrap = "v", $label = "", $class = "" )
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->wrap = $wrap;
        $this->label = $label;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
