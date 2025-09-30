<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected function rules()
    {
        return [
            'codigo'=> 'string|max:255',
            'tipo'=> 'string|max:255',
            'descricao'=> 'string|max:255',
        ];
    }
    protected $messages = [
        'codigo.unique'=> 'O código deve ser unico',
    ];

    public function mount($id)
    {
        $sensor = Sensor::find($id);

        $this->ambiente_id = $sensor->id;
        $this->codigo = $sensor->codigo;
        $this->tipo = $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;

    }

    public function salvar(){
        $this->validate();

        $sensor = Sensor::find($this->sensorId);

        $sensor->update([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor-edit', compact('ambientes'));
    }
}
