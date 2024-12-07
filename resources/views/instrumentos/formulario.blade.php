<div class="form-floating mb-3">
    <div class="form-floating mb-3">
        <input type="name" id="nombre" name="nombre" class="form-control" placeholder="nombre del instrumento"
        @if(isset($instrumento))
          value={{$instrumento->nombre}}
        @endif
        required
      />
      <label for="nombre" class="form-label fuente">Nombre del instrumento:</label>
    </div>
    
  
        
    

    <div class="form-floating my-5">
        <select class="form-select" aria-label="Seleccion clasificacion" id="clasificacion_id" name="clasificacion_id" required>
          <option selected>Selecciona una Clasificación: </option>
          @foreach ($clasificaciones as $clasificacion)
          <option value="{{$clasificacion->id}}">{{$clasificacion->tipo}}</option>                
          @endforeach
        </select>
    </div>

   

    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/instrumento')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  
</div>