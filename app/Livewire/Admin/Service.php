<?php

namespace App\Livewire\Admin;

use App\View\Components\AdminLayout;
use Livewire\Component;
use App\Models\Service as Ser;
class Service extends Component
{
    public $name,$description;
    public $isModal = false;
    public $postId;
    public function add(){
        $this->isModal = true;
        $this->postId = false;
    }
    public function create(){
        Ser::create([
            "name"=> $this->name,
            "description"=> $this->description
        ]);
        return $this->redirect(route('ser'),navigate:true);

    }
    public function edit($id){
        $this->isModal = true;
        $ser = Ser::find( $id );
        $this->postId = $ser->id;
        $this->name = $ser->name;
        $this->description = $ser->description;
    }
    public function update(){
        Ser::find( $this->postId )->update([
            'name'=> $this->name,
            'description'=> $this->description
        ]);
        return $this->redirect(route('ser'),navigate:true);
    }
    public function delete($id){
        Ser::find( $id )->delete();
        return $this->redirect(route('ser'),navigate:true);
    }
    public function render()
    {
        $ser = Ser::orderBy('id','desc')->get();
        return view('livewire.admin.service',['ser'=>$ser])->layout(AdminLayout::class);
    }
}
