<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{

    public $name;
    public $rows;
    public $help;
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $rows = '10', string $help  = null, string $content = null)
    {
        //
        $this->name = $name;
        $this->rows = $rows;
        $this->help = $help;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
