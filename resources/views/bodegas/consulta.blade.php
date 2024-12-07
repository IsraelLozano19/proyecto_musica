@extends('dashboard')

@section('contenido')


<a href='/bodega/create'>
    <button type="button" class="btn btn-success">Registro Bodega</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Instrumento</th>
        
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($bodegas as $bodega)
        <tr>
            <td>{{ $bodega->cantidad }}</td>
            <td>{{ $bodega->precio }}</td>
            <td>{{ $bodega->instrumento }}</td>
           
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/bodega/{{$bodega->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/bodega/{{ $bodega->id }}' method="POST"> 
                            @csrf
                            @method('DELETE')
                            <button onClick="return confirm('¿Estas seguro?')" class="btn btn-danger" type="submit">
                                Borrar
                            </button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
