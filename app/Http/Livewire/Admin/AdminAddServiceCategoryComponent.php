<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddServiceCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $image;
    public function generateslug()
    {
        $this->slug = str::slug($this->name,'');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' =>'required',
            'slug' => 'required',
            'image' => 'required|mimes:jpg,png'
        ]);
    }
    public function createNewCategory()
    {
        $this->validate([
            'name' =>'required',
            'slug' => 'required',
            'image' => 'required|mimes:jpg,png'
        ]);
        $category = new Servicecategoroy;
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp.'_'. $this->image->extension();
        $this->iamge
        
    }
    public function render()
    {
        return view('livewire.admin.admin-add-service-category-component')->layout('layout.home');
    }
}
