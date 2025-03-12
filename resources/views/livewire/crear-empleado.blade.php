<div>
    <div style="text-align: center">
        <form wire:submit="guardar">

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" wire:model="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input  class="form-control" wire:model="email">
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-3">
                  <label class="form-label">contraseña</label>
                  <input  class="form-control" wire:model="password">
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


            <div>
                <button class="btn btn-success" type="submit">AGREGAR</button>
            </div>
        </form>
    </div>
</div>