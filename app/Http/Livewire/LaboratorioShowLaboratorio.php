<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LaboratorioShowLaboratorio extends Component
{
    public $nombre;
    public function render()
    {
        $nombre=" Informacion enviada desde  laboratorio";
        return view('livewire.laboratorio-show-laboratorio', compact('nombre'));
    }
}
