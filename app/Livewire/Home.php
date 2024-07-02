<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.app')]
    #[Title('SEA salon✨')]
    public function render()
    {
        return view('livewire.home');
    }
}
