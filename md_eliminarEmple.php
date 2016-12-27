<form method="POST" action="Crud/eliminarEmple.php?codigo='.$reg['Documento'].'"  class="form-horizontal" >
<div class="modal fase" id="eliminarEmple" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
      <input type="hidden">
      <h2 class="text-center text-muted">¿Esta seguro?</h2>
	  <p class="lead text-muted text-center">Esta acción eliminará de forma permanente el registro. ¿Deseas continuar?</p>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-lg btn-primary">Continuar</button>
      </div>
    </div>
  </div>	
</div>
</form>
