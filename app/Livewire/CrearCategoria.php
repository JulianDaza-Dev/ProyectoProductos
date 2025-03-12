<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CrearCategoria extends Component
{
    public $nombre;
    public $descripcion;

    public function guardar()
    {
       $validacion= $this->validate([
            "nombre"=> "required|min:5|max:100",
            "descripcion"=> "required|min:10|max:300"],
        [
            "nombre.required"=> "nombre requerido",
            "nombre.min"=> "nombre muy corto",
            "nombre.max"=> "nombre muy largo",
            "descripcion.required"=> "descripcion requerida",
            "descripcion.min"=> "descripcion muy corta",
            "descripcion.max"=> "descripcion muy larga",
        ]);

        Categoria::create($validacion);
        to_route("inicio");
    }
    public function render()
    {
        return view('livewire.crear-categoria');
    }
}
