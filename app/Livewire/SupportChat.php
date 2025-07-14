<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\message as SupportMessage;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class SupportChat extends Component
{
    use WithPagination;

    public $support_id;
    public $newMessage = '';

    protected $rules = [
        'newMessage' => 'required|string|max:5000',
    ];

    public function deleteMessage($id)
    {
        $message = SupportMessage::findOrFail($id);

        $message->delete();
    
    }
    public function send()
    {
        $this->validate();

        SupportMessage::create([
            'schats_id' => $this->support_id,
            'user_id' => Auth::id(),
            'message' => $this->newMessage,
            ]);

        $this->newMessage = '';
    }

    public function render()
    {
        $messages = SupportMessage::where('schats_id', $this->support_id)
            ->orderBy('created_at')
            ->get();

        return view('livewire.support-chat', compact('messages'));
    }
}
