<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\View\Components\AdminLayout;
use App\Models\Portfolio as Port;
use Livewire\WithFileUploads;
class Portfolio extends Component
{
    use WithFileUploads;
    public $name,$url,$description;
    public $image;
    public $postId;
    public $isModal =false;
    public function add() {
        $this->isModal = true;
        $this->postId= false;
        $this->name="";
        $this->image="";
        $this->description="";
        $this->url="";
    }
    public function create() {
        if ($this->image) {
                $name = md5($this->image . microtime()).'.'.$this->image->extension();
                $this->image->storeAs('photos', $name);
        }
        Port::create([
            'name'=>$this->name,
            'url'=>$this->url,
            'description'=>$this->description,
            'image'=>'/storage/photos/'.$name
        ]);
        return $this->redirect(route('port'),navigate:true);
    }
    public function edit($id){
        $port = Port::find($id);
        $this->postId=$port->id;
        $this->name=$port->name;
        $this->url=$port->url;
        $this->image=$port->image;
        $this->description=$port->description;
        $this->isModal=true;
    }
    public function update(){
        $port= Port::find($this->postId);
        if($this->image != $port->image){
            $path_photo = public_path().$port->image;
            if(file_exists($path_photo)){
                unlink($path_photo);
            }
            $name = md5($this->image . microtime()).'.'.$this->image->extension();
            $this->image->storeAs('photos', $name);
            $port->update([
                'name'=>$this->name,
                'url'=>$this->url,
                'description'=>$this->description,
                'image'=>'/storage/photos/'.$name
            ]);
        }else{
            $port->update([
                'name'=>$this->name,
                'url'=>$this->url,
                'description'=>$this->description,
            ]);
        }
        return $this->redirect(route('port'),navigate:true);
    }
    public function delete($id){
        Port::find($id)->delete();
        return $this->redirect(route('port'),navigate:true);
    }
    public function render()
    {
        $port = Port::get();
        return view('livewire.admin.portfolio',['port'=>$port])->layout(AdminLayout::class);
    }
}
