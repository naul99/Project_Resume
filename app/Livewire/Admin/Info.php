<?php

namespace App\Livewire\Admin;
use App\Models\Infos;
use Livewire\Component;
use Livewire\WithFileUploads;

class Info extends Component
{
    use WithFileUploads;
    public $photo,$cvs;
    public $fullname;
    public $position;
    public $birthday;
    public $website;
    public $phone;
    public $email;
    public $location;
    public $languages;
    public $interests;
    public function update(Infos $infos){
       $info = Infos::find(1);
       $info->name = $this->fullname;
       $info->position = $this->position;
       $info->birthday = $this->birthday;
       $info->website = $this->website;
       $info->phone = $this->phone;
       $info->email = $this->email;
       $info->location = $this->location;
       $info->languages = $this->languages;
       $info->interests = $this->interests;
       if($this->photo){
        $path_photo = public_path().$info->photo;
        if(file_exists($path_photo)){
            unlink($path_photo);
        }
        $name = md5($this->photo . microtime()).'.'.$this->photo->extension();
        $this->photo->storeAs('photos', $name);
        $info->photo = '/storage/photos/'.$name;
       }
       if($this->cvs){
        $path_cv = public_path().$info->cv;
        if(file_exists($path_cv)){
            unlink($path_cv);
        }
        $name_cv = md5($this->cvs . microtime()).'.'.$this->cvs->extension();
        $this->cvs->storeAs('cv', $name_cv);
        $info->cv = '/storage/cv/'.$name_cv;
       }
       
        $info->save();
       session()->flash('message', 'Cập nhật thành công.');
       return $this->redirect(route('info'),navigate:true);

    }
    public function render()
    {
        $info = Infos::find(1);
        $this->fullname = $info->name;
        $this->position = $info->position;
        $this->birthday = $info->birthday;
        $this->website = $info->website;
        $this->phone = $info->phone;
        $this->email = $info->email;
        $this->location = $info->location;
        $this->languages = $info->languages;
        $this->interests = $info->interests;
        // $this->photo = $info->photo;
        
        return view('livewire.admin.info',['info'=>$info])->layout(\App\View\Components\AdminLayout::class);
    }
}
