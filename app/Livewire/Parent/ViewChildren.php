<?php

namespace App\Livewire\Parent;

use Livewire\Component;
use App\Models\Children;
use Mary\Traits\Toast;
use App\Models\Parents;

class ViewChildren extends Component
{
    use Toast;

    public bool $addModal = false;

    public bool $viewModal = false;

    public $name, $age, $id, $parents_id, $parent_name;

    public function openCreateModal()
    {
        $this->addModal = true;
    }

    public function closeCreateModal()
    {
        $this->addModal = false;
    }

    public function create()
    {
        $this->parent_id = auth()->user()->id;
        $this->validate([
            'name' => 'required',
            'age' => 'required',
        ]);

        Children::create([
            'name' => $this->name,
            'age' => $this->age,
            'parents_id' => $this->parent_id,
        ]);

        $this->addModal = false;
        
        $this->success('Your child has been added to the system successfully');

        

        $this->name = '';
        $this->age = '';
    }

    public function view($id)
    {
        $this->viewModal = true;
        $child = Children::find($id);
        $this->name = $child->name;
        $this->age = $child->age;
        $this->id = $child->id;
        $this->parents_id = $child->parents_id;
        $this->parent_name = Parents::find($child->parents_id)->name;
    }


    public function render()
    {
        return view('livewire.parent.view-children');
    }
}
