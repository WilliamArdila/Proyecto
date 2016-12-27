<form id="actualizarEmpleado">
     <div class="modal fade" id="modificarEmpleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" align="center">Modificar empleado</h4>
          </div>

          <div class="modal-body">
          <div id="datos_ajax"></div> 
     <div class="form-group">        
     <label>Documento</label>
      <input type="text" class="form-control"  name="Documento"  required >
      </div>
     <div class="form-group"> 
     <label>NombreCompleto</label>
        <input type="text" class="form-control" title="Ingrese solo letras" name="nombreCompleto" pattern="[a-zA-Z]{1,45}" required >
     </div>
     <div class="form-group">
     <label>Direccion</label>
     <input type="text" class="form-control" name="direccion" id="Direccion" pattern="[a-zA-Z0-9]{1,45}" required>
    </div>
    <div class="form-group">
     <label>Telefono</label>
     <input type="tel" class="form-control" name="Telefono" id="telefono" pattern="[0-9]{7,25}" required>
     </div>
 	<div class="form-group">
     <label>Correo</label>
    <input type="email" class="form-control" name="Correo" id="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
            </div>
	<div class="form-group">
     <label>Fecha Nacimiento</label>
     <input type="date" name="FechaN"  required>
    </div>
    <div class="form-group">
     <label>Cargo</label>
     <select name="Cargo" id="Cargo" required>					
		<?php 
			$jorge=conectar();
			$registros=$jorge->query("select codigoCargo,NombreCargo from cargo")
			or die($jorge->error);
			while ($reg=$registros->fetch_array()) {
					echo "<option value=\"".$reg['codigoCargo']."\">".$reg['NombreCargo']."</option>";
								}
		?>
	</select>
	</div>
<div class="form-group">
	<label>EPS</label>
	<select name="idEPS" id="EPS" required>
		<?php 
			$jorge=conectar();
			$registros=$jorge->query("select * from eps")
			or die($jorge->error);
			while ($reg=$registros->fetch_array()) {
					echo "<option value=\"".$reg['idEPS']."\">".$reg['nombreEPS']."</option>";
						}
		?>
	</select>
</div>
<div class="form-group">
<label>ARL</label>
<select name="idARL" id="ARL" required>
	<?php 
		$jorge=conectar();
		$registros=$jorge->query("select * from arl")
		or die($jorge->error);
		while ($reg=$registros->fetch_array()) {
				echo "<option value=\"".$reg['idARL']."\">".$reg['nombreARL']."</option>";
				}
	?>
</select>
</div>
<div class="form-group">
<label>AFP</label>
<select name="idAFP" id="AFP" required>
							 <?php 
							$jorge=conectar();
							$registros=$jorge->query("select * from AFP")
							or die($jorge->error);
							while ($reg=$registros->fetch_array()) {
							  echo "<option value=\"".$reg['idAFP']."\">".$reg['nombreAFP']."</option>";
							}
							  ?>
							  </select>
</div>
</div>
<div class="modal-footer">
               <button class="btn btn-success" type="submit">Enviar </button>
               <button class="btn btn-tema" data-dismiss="modal">Cerrar</button>
          </div>

        

        </div> 
      </div> 
    </div>
</form>