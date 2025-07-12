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
        //dd($this->currentRoute);
        $this->dispatch('routeChanged', step: $route);

//        $this->dispatchBrowserEvent('forceRender'); 

        //dd($this->currentRoute);
        //$this->emit('loadPage', $route);
    }
    public function render()
    {
        return view('livewire.layout.aside');
    }
}
