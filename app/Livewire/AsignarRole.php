<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class AsignarRole extends Component
{
    public $usuario;
    public $roles;
    public $totalroles; 
    public $roles_usuario = [];

    public function cambiar($rol)
    {
        if ($this->usuario->hasRole($rol))
        {
            $this->usuario->removeRole($rol);
        }else{
            $this->usuario->assignRole($rol);
        }
        return redirect(request()->header('Referer'));
    }


    public function mount($usuario)
    {
        $this->usuario = User::find($usuario);
        $this->roles = Role::all();
        
        //$this->roles = Role::all()->pluck("name")->toArray();
    }
    public function render()
    {
        //dd($this->roles);
        /*
        $this->totalroles = count($this->roles);
        for ($i = 0; $i < $this->totalroles; $i++) 
        {
            if($this->usuario->hasRole($this->roles[$i]))
            {
                $this->roles_usuario[] = 1;
            }else{
                $this->roles_usuario[] = 0;
            }

        }*/



        return view('livewire.asignar-role');
    }
}
