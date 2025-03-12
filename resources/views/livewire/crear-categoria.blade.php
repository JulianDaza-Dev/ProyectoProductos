<div>
    <div style="text-align: center">
        <form wire:submit="guardar">

            <div class="mb-3">
                <label style="width: 50%" class="form-label">NOMBRE CATEGORIA</label>
                <input type="text" class="form-control" wire:model="nombre">
                @error('nombre')
                <p style="color: red">{{$message}}</p>
                
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">DESCRIPTION CATEGORIA</label>
                <textarea class="form-control" wire:model="descripcion"></textarea>
                @error('descripcion')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div>
                <button class="btn btn-success" type="submit">AGREGAR</button>
            </div>
        </form>
    </div>
</div>