<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DemoComponent extends Component
{
    /**
     * Create a new component instance.
     */
    //defining variable
    public $title;
    public function __construct($arg)
    {
        //Refers to the current object
       $this->title=$arg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.demo-component');
    }
}
