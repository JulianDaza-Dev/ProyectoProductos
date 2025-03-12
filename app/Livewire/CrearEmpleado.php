<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class CrearEmpleado extends Component
{
    public $name = '' ;
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function guardar()
    {$this->password_confirmation = $this->password;
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed']]);


        $user = User::create($validated);
        $rol=Role::where('name','empleado')->first();
        $user->assignRole($rol);

        return to_route("inicio");
    }

    public function render()
    {
        return view('livewire.crear-empleado');
    }
}
