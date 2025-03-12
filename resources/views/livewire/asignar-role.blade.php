<div>
    <div style="text-align: center">
        <p>
            USUARIO: {{$usuario->name}}
        </p>
        <table class="table table-dark table-striped-columns">

            <tr>
                <td>
                    ROL
                </td>
                <td>
                    ESTADOO3333
                </td>

            </tr>
            {{--@for ($i = 0; $i < $totalroles; $i++)--}}
                @foreach ($roles as $rol)
                    
                <tr>
                    <td>
                        <P>{{$rol->name}}</P>
                    </td>
                    <td>
                        @if (!$usuario->hasRole($rol->name))
                        <button class="btn btn-success" wire:click="cambiar('{{$rol->name}}')">AGREGAR</button>
                        @else
                        <button class="btn btn-danger" wire:click="cambiar('{{$rol->name}}')">QUITAR</button>
                        @endif
                    </td>
                    
                </tr>
                @endforeach
            {{--@endfor--}}
        </table>
    </div>
</div>