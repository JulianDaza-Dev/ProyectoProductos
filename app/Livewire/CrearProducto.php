<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Producto;
use Livewire\Component;

class CrearProducto extends Component
{
    public $name = "";
    public $categoria_id;
    public $cantidad = 0;

    public function guardar()
    {
       $validacion= $this->validate([
            "name"=> "required|min:5|max:100",
            "categoria_id"=> "required",
            "cantidad"=> "required|integer"],
        [
            "name.required"=> "nombre requerido",
            "name.min"=> "nombre muy corto",
            "name.max"=> "nombre muy largo",
            "categoria_id.required"=> " requerida",
            "cantidad.required"=> "cantidad requerida"
        ]);

        Producto::create($validacion);
        to_route("inicio");
    }
    public function render()
    {
        $categorias = Categoria::get();
        return view('livewire.crear-producto',compact('categorias'));
    }
}
