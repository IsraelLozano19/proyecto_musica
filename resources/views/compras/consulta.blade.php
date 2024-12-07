@extends('dashboard')

@section('contenido')


<a href='/compra/create'>
    <button type="button" class="btn btn-success">Registrar compra</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">fecha</th>
        <th scope="col">usuario</th>
        <th scope="col">instrumento</th>
       
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($compras as $compra)
        <tr>
            <td>{{ $compra->fecha }}</td>
            <td>{{ $compra->usuario }}</td>
            <td>{{ $compra->instrumento }}</td>
           
           
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/compra/{{$compra->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/compra/{{ $compra->id }}' method="POST"> 
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
