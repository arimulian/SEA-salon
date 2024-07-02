<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Reservation extends Component
{
    #[Validate('required')]
    public $name="";
    #[Validate('required')]
    public $phone="";
    #[Validate('required')]
    public $service_id="";
    #[Validate('required')]
    public $checkIn;

    public function save()
    {
        $this->validate();
        \App\Models\Reservation::query()
            ->create([
                'name' => $this->name,
                'phone' => $this->phone,
               'service_id' => $this->service_id,
                'check_in_date' => $this->checkIn,
            ])
            ->save();
        $this->reset(['name', 'phone','service_id', 'checkIn']);
        session()->flash('status', 'Reservation has been made successfully!🤙');
    }

    #[Title('Reservation✨')]
    public function render()
    {
        $service = \App\Models\Service::all();
        return view('livewire.reservation', compact('service'));
    }
}
