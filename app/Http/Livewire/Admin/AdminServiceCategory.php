<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Servicecategory;

class AdminServiceCategory extends Component
{
    use WithPagination;
    public function render()
    {
        $admincategory = Servicecategory::paginate(10);
        return view('livewire.admin.admin-service-category',['admincategory'=> $admincategory])->layout('layout.home');
    }
}
