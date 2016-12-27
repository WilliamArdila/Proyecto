<!-- Modal -->
	<div class="modal fade" id="inst_Persona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class='fa fa-plus'></i> Agregar nuevo Empleado</h4>
				</div>
				<form class="form-horizontal" method="POST" action="RegistrarEmpleado1.php">
					<div class="modal-body">
					<!-- DOCUMENTO -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Documento</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" placeholder="Ingrese Documento" min=0 name="documento" required>
							</div>
						</div>
						<!-- NOMBRE -->
						<div class="form-group">
							<label for="nomPersona" class="col-sm-3 control-label">Nombre</label>
							<div class="col-sm-8">
								<input class="form-control" placeholder="Nombre Completo" name="nombreCompleto" required>
							</div>
						</div>
						<!-- DIRECCION -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Direccion</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" placeholder="Ingrese Direccion" name="direccion" required>
							</div>
						</div>
						<!-- TELEFONO -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Telefono</label>
							<div class="col-sm-8">
								<input type="number" min=0 class="form-control" placeholder="Ingrese telefono" name="telefono" required>
							</div>
						</div>
						<!-- EMAIL -->
						<div class="form-group">
							<label  class="col-sm-3 control-label">E-mail</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" placeholder="Ingrese Email" name="correo" required>
							</div>
						</div>
						<!--FECHA NACIMIENTO-->
						<div class="form-group">
							<label class="col-sm-3 control-label">Fecha Nacimiento</label>
							<div class="col-sm-8">
							 <input type="date"  class="form-control" name="fecha" step="1" required>
							 </div>
						</div>
						<!--CARGO-->
						<div class="form-group">
						 <label class="col-sm-3 control-label"> Cargo:</label>
							 <div class="col-sm-8">
								<select name="codigoCargo" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" required>					
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
						  </div>
						  <!--EPS-->
						  <div class="form-group">
						  	<label class="col-sm-3 control-label">EPS:</label>
							  <div class="col-sm-8">
								<select name="idEPS" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;">
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
							</div>
						  <!--ARL-->
						  <div class="form-group">
						  <label  class="col-sm-3 control-label">Seleccione ARL:</label>
						  <div class="col-sm-8">
							<select name="idARL" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" >
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
							  </div>
						    <!--AFP-->
						    <div class="form-group">								
							<label  class="col-sm-3 control-label">Seleccione AFP:</label>
							<div class="col-sm-8">
							<select name="idAFP" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;">
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

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
					</div>
				</form>
			</div>
		</div>
	</div>
