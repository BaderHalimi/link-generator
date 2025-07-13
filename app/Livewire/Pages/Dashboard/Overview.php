<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;
use App\Models\link;
use App\Models\View;
class Overview extends Component
{
    public $links;
    public $views;
    public function mount()
    {
        $this->links = link::where('user_id', auth()->id())
         ->orderBy('created_at', 'desc')
         ->get();   
        $this->views = View::where('user_id', auth()->id())
         ->orderBy('created_at', 'desc')
         ->get();

    }
    public function render()
    {
        return view('livewire.pages.dashboard.overview');
    }
}
