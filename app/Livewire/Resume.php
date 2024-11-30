<?php

namespace App\Livewire;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use Livewire\Component;
use App\Models\Infos;
class Resume extends Component
{
    public $service,$edu,$exp;
    public function mount(){
        $this->service = Service::get();
        $this->edu = Education::get();
        $this->exp = Experience::get();
    }
    public function render()
    {
        $info = Infos::find(1);
        return view('livewire.resume',[
            'ser'=>$this->service,
            'edu'=>$this->edu,
            'exp'=>$this->exp
        ])->layoutData(['info'=>$info])->title('My-Resume');
    }
}
