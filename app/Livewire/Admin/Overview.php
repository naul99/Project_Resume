<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Overview extends Component
{
    public $description_en,$description_vi;
    public function update(){
        $overview = \App\Models\overview::find(1);
        $overview->description_en = $this->description_en;
        $overview->description_vi = $this->description_vi;
        $overview->save();
        session()->flash('message', 'Cập nhật thành công.');
    }
    public function render()
    {
        $overview = \App\Models\overview::find(1);
        $this->description_vi = $overview->description_vi;
        $this->description_en = $overview->description_en;
        return view('livewire.admin.overview')->layout(\App\View\Components\AdminLayout::class);
    }
}
