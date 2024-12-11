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
       
        $lang = session()->get('locale','en') == 'vi'?'vi':'en';
        $info = Infos::select('name','position_'.$lang,'birthday','website','phone','email','location','languages_'.$lang,'photo','cv','interests_'.$lang)->find(1);
        
        $edu = Education::get();
        $ove = overview::select('description_'.$lang)->find(1);
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
