<?php

namespace App\Livewire\Layout;

use Livewire\Component;

class Aside extends Component
{
    public $currentRoute;
    public function mount(){
        $this->currentRoute = 1;
    }
    public function load_page($route)
    {
        $this->currentRoute = $route;
        //$this->emit('loadPage', $route);
    }
    public function render()
    {
        return view('livewire.layout.aside');
    }
}
