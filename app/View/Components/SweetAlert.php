<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SweetAlert extends Component
{
    /**
     * The alert title.
     *
     * @var string
     */
    public $title;

    /**
     * The alert text.
     *
     * @var string
     */
    public $text;

    /**
     * The alert icon.
     *
     * @var string
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $title, $text, $icon = 'success' )
    {
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sweetalert');
    }
}
