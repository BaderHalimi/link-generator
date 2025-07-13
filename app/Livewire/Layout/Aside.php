<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Aside extends Component
{
    public $currentRoute;
    public function mount(){
        $this->currentRoute = 1;
    }



    public function load_page($route)
    {
            $this->currentRoute = $route;
            $this->dispatch('routeChanged', step: $route);
 
    }
    
    public function render()
    {
        return view('livewire.layout.aside');
    }
}
