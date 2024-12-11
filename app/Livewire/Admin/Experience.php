<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Experience as Exp;
class Experience extends Component
{
    public $name,$time,$position,$description;
    public $postId;
    public $isModal = false;
    public function add(){
        $this->name="";
        $this->time="";
        $this->position="";
        $this->description="";
        $this->isModal = true;
        $this->postId = false;
    }
    public function create(){
        Exp::create([
            "name"=> $this->name,
            "time"=> $this->time,
            "position"=> $this->position,
            "description"=> $this->description
        ]);
        return $this->redirect(route('exp'),navigate:true);
    }
    public function edit($id){
        $exp = Exp::find($id);
        $this->postId = $exp->id;
        $this->name = $exp->name;
        $this->time = $exp->time;
        $this->position = $exp->position;
        $this->description = $exp->description;
        $this->isModal = true;
    }
    public function update(){
        
        Exp::find($this->postId)->update([
            'name'=> $this->name,
            'time'=> $this->time,
            'position'=> $this->position,
            'description'=> $this->description
        ]);
        return $this->redirect(route('exp'),navigate:true);
    }
    public function delete($id){
        Exp::find($id)->delete();
        return $this->redirect(route('exp'),navigate:true);
    }
    public function render()
    {
        $epx = Exp::orderBy('id','desc')->get();
        
        return view('livewire.admin.experience',['epx'=>$epx])->layout(\App\View\Components\AdminLayout::class);
    }
}
