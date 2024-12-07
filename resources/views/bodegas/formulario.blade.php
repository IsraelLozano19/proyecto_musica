<div class="form-floating mb-3">
    <div class="form-floating mb-3">
        <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="cantidad de compra"
        @if(isset($bodega))
          value={{$bodega->cantidad}}
        @endif
        required
      />
      <label for="cantidad" class="form-label fuente">cantidad :</label>
    </div>
    
    <div class="form-floating mb-3">
        <input type="number" id="precio" name="precio" class="form-control" placeholder="precio de compra"
        @if(isset($bodega))
          value={{$bodega->precio}}
        @endif
        required
      />
      <label for="precio" class="form-label fuente">Precio :</label>
    </div>
      
    

    <div class="form-floating my-5">
        <select class="form-select" aria-label="Seleccion instrumento" id="instrumento" name="instrumento" required>
          <option selected>Selecciona un instrumento: </option>
          @foreach ($instrumentos as $instrumento)
          <option value="{{$instrumento->id}}">{{$instrumento->nombre}}</option>                
          @endforeach
        </select>
    </div>

   

    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/bodega')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  
</div>