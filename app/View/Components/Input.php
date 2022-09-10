<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $name;
    public $place;
    public $datatype;
    public $inputvalue;
    public $readonly;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$name,$place=null,$datatype=null,$inputvalue=null,$readonly=false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->place = $place;
        $this->datatype = $datatype;
        $this->inputvalue = $inputvalue;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
