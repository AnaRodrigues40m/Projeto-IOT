<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteList extends Component
{
    public function render()
    {
        $ambiente = Ambiente::all();
        return view('livewire.ambiente-list', compact('ambiente'));
    }
}
