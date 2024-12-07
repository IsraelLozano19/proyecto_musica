<div class="form-floating mb-3">
    <div class="form-floating mb-3">
        <input type="date" id="fecha" name="fecha" class="form-control" placeholder="fecha de compra"
        @if(isset($compra))
          value={{$compra->fecha}}
        @endif
        required
      />
      <label for="fecha" class="form-label fuente">Fecha de Compra:</label>
    </div>
    
      
    

    <div class="form-floating my-5">
        <select class="form-select" aria-label="Seleccion casificacion" id="usuario" name="usuario" required>
          <option selected>Selecciona un usuario: </option>
          @foreach ($usuarios as $usuario)
          <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>                
          @endforeach
        </select>
    </div>

    <div class="form-floating my-5">
      <select class="form-select" aria-label="Seleccion clasificacion" id="instrumento" name="instrumento" required>
        <option selected>Selecciona un Instrumento: </option>
        @foreach ($instrumentos as $instrumento)
        <option value="{{$instrumento->id}}">{{$instrumento->tipo}}</option>                
        @endforeach
      </select>
  </div>
   

    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/clasificacion')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  
</div>