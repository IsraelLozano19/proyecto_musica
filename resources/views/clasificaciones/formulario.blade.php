<div class="form-floating mb-3">
 
    
  
    <div class="form-floating mb-3">
      <input type="text" id="tipo" name="tipo" class="form-control" placeholder="tipo de clasificacion"
        @if(isset($clasificacion))
          value={{$clasificacion->tipo}}
        @endif
        required />
      <label for="tipo" class="form-label fuente">Tipo de Clasificacion: </label>
    </div>
  
    
    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/clasificacion')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar </button>
    </div>

  
</div>