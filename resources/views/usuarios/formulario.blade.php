<div class="form-floating mb-3">
    <div class="form-floating mb-3">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del usuario"
        @if(isset($usuario))
          value={{$usuario->nombre}}
        @endif
        required
      />
      <label for="nombre" class="form-label fuente">Nombre del usuario:</label>
    </div>
    <div class="form-floating mb-3">
      <input type="name" id="apellidoP" name="apellidoP" class="form-control" placeholder="Apellido paterno del usuario"
        @if(isset($usuario))
          value={{$usuario->apellidoP}}
        @endif
        required
      />
      <label for="apellidoP" class="form-label fuente">Apellido paterno:</label>
    </div>
  
    <div class="form-floating mb-3">
      <input type="name" id="apellidoM" name="apellidoM" class="form-control" placeholder="Apellido materno del usuario"
        @if(isset($usuario))
          value={{$usuario->apellidoM}}
        @endif
        required
      />
      <label for="apellidoM" class="form-label fuente">Apellido materno:</label>
    </div>
  
   
    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/usuario')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar usuario</button>
    </div>
  </form>
</div>
 