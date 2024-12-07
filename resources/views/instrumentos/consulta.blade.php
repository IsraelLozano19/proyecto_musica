@extends('dashboard')

@section('contenido')


<a href='/instrumento/create'>
    <button type="button" class="btn btn-success">Registrar instrumento</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
       
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($instrumentos as $instrumento)
        <tr>
            <td>{{ $instrumento->nombre }}</td>
            <td>{{ $instrumento->tipo }}</td>
         
           
           
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/instrumento/{{$instrumento->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/instrumento/{{ $instrumento->id }}' method="POST"> 
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
