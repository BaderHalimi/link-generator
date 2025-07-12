<?php
namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;
use Livewire\Attributes\On;

class Routing extends Component
{
    
    public $currentRoute = 1;
    public $counter = 0;
    #[On('routeChanged')]
    public function setRoute($step)
    {
        $this->currentRoute = $step;
        $this->counter++;

    }

    public function render()
    {
        return view('livewire.pages.dashboard.routing');
    }
}
