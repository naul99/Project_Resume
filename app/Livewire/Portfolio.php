<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Infos;
class Portfolio extends Component
{
    public function render()
    {
        $info = Infos::find(1);
        return view('livewire.portfolio')->layoutData(['info'=>$info])->title('My-Portfolio');
    }
}
