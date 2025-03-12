<div>
    @can('crear-categorias')
        <div style="text-align: center">
            <p>ADMIN</p>
            <div class="d-grid gap-2">
                <a class="btn btn-secondary" href="{{route('crear-categoria')}}">CREAR CATEGORIA</a>
                <a class="btn btn-secondary" href="{{route('crear-empleado')}}">CREAR EMPLEADO</a>
            </div>
            <div>
                <div style="text-align: center;margin-top:2%">
                    <p>CATEGORIAS</p>
                <table class="table table-striped">
                    <tr>
                        <td>
                            NOMBRE
                        </td>
                        <td>
                            DESCRIPCION
                        </td>
                        
                        <td>
                            BORRAR
                        </td>
                    </tr>
                    @forelse ($categorias as $categoria)
                    <tr>
                        <td>
                            {{$categoria->nombre}}
                        </td>
                        <td>
                            {{$categoria->descripcion}}
                        </td>
                        <td>
                            <button class="btn btn-danger" wire:click="borrarCategoria({{$categoria->id}})">BORRAR</button>
                        </td>
                    </tr>
                    @empty

                    @endforelse
                        
                  </table>
            </div>
            <div>
                <div style="text-align: center;margin-top:2%">
                    <p>USUARIOS</p>
                <table class="table table-striped">
                    <tr>
                        <td>
                            NOMBRE
                        </td>
                        <td>
                            ROLES
                        </td>
                        <td>
                            ADMINISTRAR
                        </td>
                        <td>
                            BORRAR
                        </td>
                    </tr>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>
                            {{$usuario->name}}
                        </td>
                        <td>
                            @foreach ($usuario->roles as $rol )
                            
                            {{$rol->name}}
                            @endforeach
                        </td>
                        <td>
                            <button class="btn btn-success" wire:click="rol({{$usuario->id}})">
                                ADMINISTRAR
                              </button>
                        </td>
                        <td>
                            <button class="btn btn-danger" >BORRAR</button>
                        </td>
                    </tr>
                    @endforeach
                        
                  </table>
            </div>
        </div>

    @endcan
    @can('crear-productos')
        <div style="text-align: center">
            <p>EMPLEADO</p>
            <div class="d-grid gap-2">
                <a class="btn btn-secondary" href="{{route('crear-producto')}}">CREAR PRODUCTOS</a>
            </div>
            <div>
                <div style="text-align: center;margin-top:2%">
                    <p>PRODUCTOS</p>
                <table class="table table-striped">
                    <tr>
                        <td>
                            NOMBRE
                        </td>
                        <td>
                            CATEGORIAS  
                        </td>
                        <td>
                            CANTIDAD
                        </td>
                        <td>
                            BORRAR
                        </td>
                    </tr>
                    @foreach ($productos as $producto)
                    <tr>
                        <td>
                            {{$producto->name}}
                        </td>
                        <td>
                            {{$categorias[$producto->categoria_id]}}
                        </td>
                        <td>
                            {{$producto->cantidad}}
                        </td>
                        <td>
                            <button class="btn btn-danger" wire:click="borrarCategoria({{$producto->id}})">BORRAR</button>
                        </td>
                    </tr>
                    @endforeach
                        
                  </table>
            </div>
        </div>

    @endcan
    @can('agregar-carrito')
        <div style="text-align: center">
            <p>CLIENTE</p>
        </div>

    @endcan
    <!-- Button trigger modal -->
