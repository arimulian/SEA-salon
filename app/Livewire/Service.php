<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Service extends Component
{
    #[Title('Service✨')]
    public function render()
    {
        return view('livewire.service');
    }
}
