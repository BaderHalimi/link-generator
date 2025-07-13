<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;
use App\Models\link;
use Livewire\WithFileUploads;

use Illuminate\Support\Str;
class Creat extends Component
{
    use WithFileUploads;

    public $currentStep = 1;

    public $originalUrl;
    public $pageTitle;
    public $expireDate;
    public $disabled = false;
    public $code;
    public $url;
    public $image;
    public $title;
    public $description;
    public $level_ads;
    public $time_in_level;
    public $expire_date;
    public $additional_data;
    public $link_id = null;
    public $link;
    protected $queryString = ['link_id'];

    public function nextStep()
    {
        if ($this->currentStep < 3) {
            $this->currentStep++;
        }
    }

    public function prevStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }
    public function gen_code()
    {
        if (!empty($this->code)) {
            session()->flash('error', 'الكود تم إنشاؤه بالفعل!');
            return;
        }
        $this->code = substr(Str::uuid()->toString(), 0, 8);

    }
    public function submit()
    {

        session()->flash('success', 'تم إنشاء الرابط بنجاح!');
        $this->reset();
    }

    public function mount()
    {
        //dd($this->queryString, $this->link_id);
        if ($this->link_id) {
            $this->link = link::find($this->link_id);
            if ($this->link && $this->link->user_id === auth()->id()) {
                $this->code = $this->link->code;
                $this->url = $this->link->url;
                $this->image = $this->link->image;
                $this->title = $this->link->title;
                $this->description = $this->link->description;
                $this->level_ads = $this->link->additional_data['level_ads'] ?? 1;
                $this->time_in_level = $this->link->additional_data['time_in_level'] ?? 1;
                $this->expire_date = $this->link->additional_data['expire_date'] ?? '';
            } else {
                session()->flash('error', 'الرابط غير موجود أو ليس لديك صلاحية للوصول إليه.');
                return redirect()->route('dashboard.links');
            }
        }
        else {
            $this->gen_code();
            $this->link = new link();
            $this->currentStep = 1;
            $this->originalUrl = '';
            $this->pageTitle = '';
            $this->expireDate = '';
            $this->disabled = false;
            $this->url = '';
            $this->image = '';
            $this->title = '';
            $this->description = '';
            $this->level_ads = 1;
            $this->time_in_level = 1;
            $this->expire_date = '';
            $this->additional_data = [];
        }
    }
    public function create(){
        
        

        $this->store();
    }
    public function store(){

        if ($this->image){
            $this->image = $this->image->store('links', 'public');

        }
        $this->link->code = $this->code;
        $this->link->user_id = auth()->id();
        $this->link->url = $this->url;
        $this->link->image = $this->image;
        $this->link->title = $this->title;
        $this->link->description = $this->description;
        $this->link->additional_data = [
            'level_ads' => $this->level_ads,
            'expire_date' => $this->expireDate,
            'time_in_level' => $this->time_in_level,
        ];
        $this->link->save();
        //dd($link);


        session()->flash('success', 'تم إنشاء الرابط بنجاح!');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.pages.dashboard.creat');
    }
}
