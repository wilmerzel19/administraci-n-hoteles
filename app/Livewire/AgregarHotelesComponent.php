<?php

namespace App\Livewire;

use Livewire\Component;

class AgregarHotelesComponent extends Component


{
    public $tiposDeLocales = [1 => 'Hoteles', 2 => 'Condominios'];

    public function render()
    {
        return view('livewire.agregar-hoteles-component');
    }
}
