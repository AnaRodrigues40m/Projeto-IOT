<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;

class ControleLed extends Component
{

    public $status; 
    public $perPage = 15;
    public $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15]
    ];

    //criar uma função que ao clicar tanto para ligar ou desligar, ela altere o valor da variavel status.
   public function toggleStatus($sensorId)
    {
        // Encontra o sensor pelo ID. O método findOrFail() retornará um erro se o sensor não for encontrado.
        $sensor = Sensor::findOrFail($sensorId);

        // Altera o valor do status (true -> false ou false -> true)
        $sensor->status = !$sensor->status;

        // Salva a alteração no banco de dados
        $sensor->save();
    }

    //quando alterar o valor, deve ser feito um update no status
    public function render()
    {
         $sensor = Sensor::all();
        $sensor = Sensor::where('codigo', 'like', "%{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.controle-led', compact('sensor'));
    }
}
