<?php

namespace App\Http\Livewire\Proveedor;

use Livewire\Component;
use App\Models\Proveedor;


class ShowProveedor extends Component
{
    public $buscador;
    public $open=false;
    public $sort='nombre';
    public $direccion='asc';
    // variables para guardar la informacion en el formulario
    public $nombre, $nit, $genero, $direccionp, $telefono, $email, $pais, $departamento, $municipio;


    protected $rules = [
            'nit' => 'required|numeric|integer|min:6|max:15',
            'nombre' => 'required|min:3|max:50',
            'genero' => 'required',
            'direccionp',
            'telefono' => 'required|numeric|min:7|max:15',
            'email' => 'required|email',
            'pais'  => 'required',
            'departamento'=> 'required',
            'municipio'=> 'required'
    ];
    private function resetInput()
    {
		$this->reset([
            'nit',
            'nombre',
            'genero',
            'direccionp',
            'telefono',
            'email',
            'pais',
            'departamento',
            'municipio'
        ]);
    }

    public function save(){

$this->validate();
        Proveedor::create([
            'nit' => $this->nit,
            'nombre' => $this-> nombre,
            'genero' => $this-> genero,
            'direccionp' => $this-> direccionp,
            'telefono' => $this-> telefono,
            'email' => $this-> email,
            'pais' => $this-> pais,
            'departamento'=> $this-> departamento,
            'municipio' => $this-> municipio

        ]);

        $this->emit('alert');
        $this->resetInput();

    }
    public function edit($id){
        $record = Empleado::findOrFail($id);
        $this->selected_id = $id;
        $this->nit =$record = $nit;
		$this->nombre = $record-> nombre;
        $this->genero = $record-> genero;
        $this->direccionp = $record-> direccionp;
        $this->telefono = $record-> telefono;
        $this->email = $record-> email;
		$this->pais = $record-> pais;
		$this->departamento = $record-> departamento;
		$this->municipio = $record-> municipio;

    }

    public function render()
    {
        $proveedores=Proveedor::where('nombre', 'like', '%'. $this->buscador .'%')
        ->orWhere('nombre', 'like', '%'. $this->buscador .'%')
        ->orWhere('nit', 'like', '%'. $this->buscador .'%')
        ->orWhere('municipio', 'like', '%'. $this->buscador .'%')
        ->orWhere('telefono', 'like', '%'. $this->buscador .'%')->orderBy($this->sort, $this->direccion)->get();

        $titulo="Lista de proveedores";
            return view('livewire.proveedor.show-proveedor', compact('proveedores', 'titulo'));
    }

    public function ordenar($sort) {
        if ($this->sort == $sort) {
            if ($this->direccion=='asc') {
                $this->direccion='desc';
            } else {
                $this->direccion='asc';
            }

        }else {
            $this->sort = $sort;
            $this->direccion='asc';
        }
    }


}
