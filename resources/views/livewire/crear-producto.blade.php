<div>
    <div style="text-align: center">
        <form wire:submit="guardar">

            <div class="mb-3">
                <label style="width: 50%" class="form-label">NOMBRE PRODUCTO</label>
                <input type="text" class="form-control" wire:model="name">
                @error('name')
                <p style="color: red">{{$message}}</p>
                
                @enderror
            </div>
            <div class="mb-3">
                <div>

                    <label style="width: 50%" class="form-label">CATEGORIA PRODUCTO</label>
                </div>
                <div>

                    <select wire:model="categoria_id">
                        <option value="">ESCOGE</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        
                        @endforeach
                    </select>
                    
                </div>
                @error('categoria_id')
                <p style="color: red">{{$message}}</p>
                
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">CANTIDAD</label>
                <input type="number" class="form-control" wire:model="cantidad">
                @error('cantidad')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div>
                <button class="btn btn-success" type="submit">AGREGAR</button>
            </div>
        </form>
    </div>
</div>