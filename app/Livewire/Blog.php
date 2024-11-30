<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Infos;
class Blog extends Component
{
    public function render()
    {
        $info = Infos::find(1);
        return view('livewire.blog')->layoutData(['info'=>$info])->title('Blog');
    }
}
