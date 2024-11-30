<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Overview extends Component
{
    public $description;
    public function update(){
        $overview = \App\Models\overview::find(1);
        $overview->description = $this->description;
        $overview->save();
        session()->flash('message', 'Cập nhật thành công.');
    }
    public function render()
    {
        $overview = \App\Models\overview::find(1);
        $this->description = $overview->description;
        return view('livewire.admin.overview')->layout(\App\View\Components\AdminLayout::class);
    }
}
