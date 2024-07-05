<?php

namespace App\Livewire\Parent;

use Livewire\Component;
use App\Models\Payment;
use Mary\Traits\Toast;

class TrackPayments extends Component
{
    use Toast;

    public bool $createModal = false;

    public $child_id, $date, $amount, $description, $status, $method, $id;

    public function openCreateModal()
    {
        $this->createModal = true;
    }

    public function closeCreateModal()
    {
        $this->showModal = false;
    }

    public function create()
    {
        Payment::create([
            'child_id' => $this->child_id,
            'date' => $this->date,
            'amount' => $this->amount,
            'description' => $this->description,
            'status' => $this->status,
            'method' => $this->method,
        ]);

        $this->createModal = false;
        $this->success('Payment created successfully');
    }

    public function render()
    {
        return view('livewire.parent.track-payments');
    }
}
