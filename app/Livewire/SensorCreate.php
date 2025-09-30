<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
use App\Models\User;
use Livewire\Component;

class SensorCreate extends Component
{

    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'ambiente_id'=> 'required',
        'codigo' => 'required|unique:sensors,codigo',
        'tipo' => 'required',
        'descricao' => 'required'
    ];

    protected $messages = [
       'ambiente_id.required'=> 'Campo obrigatório',
       'codigo.required'=> 'Campo obrigatório',
       'codigo.unique'=> 'Campo único',
       'tipo.required'=> 'Campo obrigatório',
       'descricao'=> 'Campo obrigatório'
    ];

    public function store()
    {
        $this->validate();

         Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status
         ]);

         return redirect()->route( 'sensor.list');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor-create', compact('ambientes'));
    }
}
