<?php

namespace App\Livewire;

use App\Models\Education;
use App\Models\Experience;
use App\Models\overview;
use App\Models\Service;
use Livewire\Component;
use App\Models\Infos;
class Home extends Component
{
    
    public function render()
    {
        $info = Infos::find(1);
        $edu = Education::get();
        $ove = overview::find(1);
        $exp = Experience::get();
        $ser = Service::get();
        return view('livewire.home',
        [
            'info'=>$info,
            'edu'=>$edu,
            'ove'=>$ove,
            'exp'=>$exp,
            'ser'=>$ser
        ])->layoutData(['info'=>$info]);
    }
}
