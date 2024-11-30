<?php

namespace App\Livewire\Admin;

use App\Models\Education as Edu;
use Livewire\Component;
class Education extends Component
{
    public $name,$time,$major,$gpa,$description;
    public $postId;
    public $isModal = false;
    public function add(){
        $this->name = "";
        $this->time = "";
        $this->major = "";
        $this->gpa = "";
        $this->description = "";
        $this->isModal = true;
        $this->postId = false;
    }
    public function create(){
       Edu::create([
        "name"=>$this->name,
        "time"=>$this->time,
        "major"=>$this->major,
        "gpa"=>$this->gpa,
        "description"=>$this->description
       ]);
       return $this->redirect(route('edu'),navigate:true);
    }
    public function edit($id){
        $edu = Edu::find($id);
        $this->postId=$id;
        $this->name=$edu->name;
        $this->time=$edu->time;
        $this->major=$edu->major;
        $this->gpa=$edu->gpa;
        $this->description=$edu->description;
        $this->isModal = true;
    }
    public function update(){
        Edu::find($this->postId)->update([
            'name'=>$this->name,
            'time'=>$this->time,
            'major' => $this->major,
            'gpa'=>$this->gpa,
            'description'=>$this->description

        ]);
        return $this->redirect(route('edu'),navigate:true);
    }
    public function delete($id){
        Edu::where('id',$id)->delete();
        return $this->redirect(route('edu'),navigate:true);
    }
    public function render()
    {
        $edu = Edu::orderBy('id','desc')->get();
        return view('livewire.admin.education',['edu'=>$edu])->layout(\App\View\Components\AdminLayout::class);
    }
}
