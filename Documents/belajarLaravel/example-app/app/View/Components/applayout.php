<?php

namespace App\View\Components;

use Illuminate\Queue\NullQueue;
use Illuminate\View\Component;

class applayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $styles = null;

    public function __construct($title = null)
    {
        $this->title= $title ?? "hobi megel";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
