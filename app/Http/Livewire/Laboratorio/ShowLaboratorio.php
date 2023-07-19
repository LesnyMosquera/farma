<?php

namespace App\Http\Livewire\Laboratorio;

use Livewire\Component;
use App\Models\Laboratorio;

class ShowLaboratorio extends Component
{
    public $titulo;
    public function render()
    {
        $laboratorios=Laboratorio::all();
      

        return view('livewire.laboratorio.show-laboratorio', compact('laboratorios'));
    }
}
