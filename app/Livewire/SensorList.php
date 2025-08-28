<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;

class SensorList extends Component
{

    public $perPage = 15;

    protected $queryString = [

        'perPage' => ['except' => 15]
    ];
            

    public function render()
    {
        $sensor = Sensor::all();

        return view('livewire.sensor-list', compact('sensor'));
    }
}
