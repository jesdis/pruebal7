<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Field extends Component
{

    public $name;
    public $type;
    public $help;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $type = 'text', string $help  = null, string $value = null)
    {
        //
         $this->name = $name;
         $this->type = $type;
         $this->help = $help;
         $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.field');
    }
}
