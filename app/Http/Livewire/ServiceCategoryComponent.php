<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicecategory;

class ServiceCategoryComponent extends Component
{
    public function render()
    {

        $categories = Servicecategory::all();
        return view('livewire.service-category-component',['categories'=>$categories])->layout('layout.home');
    }
}
