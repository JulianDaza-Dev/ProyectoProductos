<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Inicio extends Component
{
    public $categorias;
    public $productos;
    public $usuarios;
    public $roles;

    public $nombre_asignar;
    public function borrarCategoria($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
    }

    public function rol($usuarioID)
    {
        return to_route('asignar-role',['usuario'=>$usuarioID]);
    }

    public function mount()
    {
        $this->categorias= Categoria::pluck('nombre','id')->toArray();
        $this->roles = Role::all()->pluck('name','id')->toArray();
        $this->productos= Producto::with("categorias")->get();
        $this->usuarios= User::with('roles')->get();
        /*
        $this->categorias= Categoria::get();
        $this->productos= Producto::with("categorias")->get();
        $this->usuarios= User::with('roles')->get();*/
    }

    public function render()
    {
        
        return view('livewire.inicio');
    }
}
