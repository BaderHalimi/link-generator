<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;
use App\Models\link; 
class Links extends Component
{
    public $links;

    public function mount()
    {
        $this->links = link::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();
    }
    public function delete($linkId)
    {
        $link = link::find($linkId);
        if ($link & $link->user_id === auth()->id()) {
            $link->delete();
            $this->links = $this->links->where('id', '!=', $linkId);
            session()->flash('success', 'الرابط تم حذفه بنجاح!');
        } else {
            session()->flash('error', 'الرابط غير موجود أو ليس لديك صلاحية لحذفه.');
        }
    }
    public function render()
    {
        return view('livewire.pages.dashboard.links');
    }
}
