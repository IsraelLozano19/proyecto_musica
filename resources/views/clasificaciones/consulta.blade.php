@extends('dashboard')

@section('contenido')


<a href='/clasificacion/create'>
    <button type="button" class="btn btn-success">Registrar Clasificacion</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">Tipo</th>
       
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($clasificaciones as $clasificacion)
        <tr>
            <td>{{ $clasificacion->tipo }}</td>
          
           
           
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/clasificacion/{{$clasificacion->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/clasificacion/{{ $clasificacion->id }}' method="POST"> 
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
