<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $sensorId;
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected function rules()
    {
        return [
            'codigo'=> 'required|unique:sensors,codigo,' . $this->sensorId,
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
        if ($sensor == null) {
            session()->flash('error', 'ID nao encontrado.');
        } else {

            $this->sensorId = $sensor->id;
            $this->tipo = $sensor->tipo;
            $this->codigo = $sensor->codigo;
            $this->descricao = $sensor->descricao;
            $this->status = $sensor->status;
            $this->ambiente_id = $sensor->ambiente_id;
        }
    }

    public function salvar(){
          $this->validate();

        $sensor = Sensor::find($this->sensorId);


        $sensor->update([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);
        return redirect()->route('sensor.list');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor-edit', compact('ambientes'));
    }
}
