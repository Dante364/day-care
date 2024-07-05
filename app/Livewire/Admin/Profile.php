<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Admin;
use Mary\Traits\Toast;

class Profile extends Component
{
    use Toast;

    public $name, $email, $phone;

    public function mount()
    {
        $admin = Admin::find(auth()->user()->id);
        $this->name = $admin->name;
        $this->email = $admin->email;
        $this->phone = $admin->phone;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $admin = Admin::find(auth()->user()->id);
        $admin->name = $this->name;
        $admin->email = $this->email;
        $admin->phone = $this->phone;
        $admin->save();

        $this->success('Profile updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.profile');
    }
}
