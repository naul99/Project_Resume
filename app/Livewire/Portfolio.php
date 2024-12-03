<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Infos;
use App\Models\Portfolio as Port;
class Portfolio extends Component
{
    public function render()
    {
        $port = Port::get();
        $info = Infos::find(1);
        return view('livewire.portfolio',['port'=>$port])->layoutData(['info'=>$info])->title('My-Portfolio');
    }
}
