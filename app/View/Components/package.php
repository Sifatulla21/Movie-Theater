<?php

namespace App\View\Components;

use Illuminate\View\Component;

class package extends Component
{
    public $title;
    public $mb;
    public $tk;
    public $des;
 
    public function __construct($mb = null,$title = null,$tk= null,$des= null)
    {
        $this->title = $title;
        $this->mb = $mb;
        $this->tk = $tk;
        $this->des = $des;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.package');
    }
}
