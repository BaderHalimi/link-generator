<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;
use Livewire\Attributes\On;

class Routing extends Component
{
    public $counter = 0;

    public $currentRoute = 1;

    public function mount()
    {
        $this->currentRoute = request()->query('step', 1);
    }

    #[On('changeRoute')]
    public function changeRoute($route)
    {
        return redirect()->route('dashboard', ['step' => $route]);
        // $this->currentRoute = $route;
    }

    public function render()
    {
        return view('livewire.pages.dashboard.routing');
    }
}
