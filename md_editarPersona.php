	<!-- Modal -->
	<div class="modal fade" id="edt_Persona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class='fa fa-pencil'></i> Modificar Empleado</h4>
				</div>
				<form class="form-horizontal" method="POST" action="Crud/editar_persona.php">
					<div class="modal-body">

					<div class="form-group">
						<label for="documento" class="col-sm-3 control-label">Documento</label>
					
					<div class="col-sm-8">
								<input class="form-control" placeholder="Ingrese documento" id="documento" name="Doc" required>
								 <input type="hidden" value="" id="documento" name="documento">
							</div>
						</div>
						<!-- NOMBRE -->
						<div class="form-group">
							<label for="nombre" class="col-sm-3 control-label">Nombre Completo</label>
							<div class="col-sm-8">
								<input class="form-control" placeholder="Ingrese nombre completo" id="nombre" name="Nombre" required>
								 <input type="hidden" value="" id="Documento" name="Documento">
							</div>
						</div>
						<!-- DIRECCION-->
						<div class="form-group">
							<label for="direccion" class="col-sm-3 control-label">Direccion</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" placeholder="ingrese direccion" id="direccion" name="Direccion" required>
							</div>
						</div>
							<!-- TELEFONO -->
						<div class="form-group">
							<label for="telefono" class="col-sm-3 control-label">Telefono</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Ingrese telefono" id="telefono" name="Telefono"  maxlength="9">
							</div>
						</div>
							<!-- EMAIL -->
						<div class="form-group">
							<label for="correo" class="col-sm-3 control-label">E-mail</label>
							<div class="col-sm-7">
								<input type="email" class="form-control" placeholder="Ingrese correo" id="correo" name="Correo" required>
							</div>
						</div>
						<!-- FECHA NACIMIENTO -->
						<div class="form-group">
							<label for="dniPersona" class="col-sm-3 control-label">
							Fecha nacimiento</label>
							<div class="col-sm-5">
								<input type="date" class="form-control"  id="fechaN" name="FechaN" required>
							</div>
						</div>
						<!-- CARGO-->
						<div class="form-group">
							<label for="cargo" class="col-sm-3 control-label">
							Cargo</label>
							<div class="col-sm-5">
								<select name="Cargo" id="cargo" required>					
						<?php 
							$jorge=conectar();
							$registros=$jorge->query("select codigoCargo,NombreCargo from cargo")
							or die($jorge->error);
							while ($reg=$registros->fetch_array()) {
							echo "<option value=\"".$reg['codigoCargo']."\">".$reg['NombreCargo']."</	option>";
								}
						?>
								</select>
							</div>
						</div>
					<!-- EPS-->
						<div class="form-group">
							<label for="eps" class="col-sm-3 control-label">
							EPS</label>
							<div class="col-sm-5">
								<select name="idEPS" id="eps">
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
					<!-- ARL -->
						<div class="form-group">
							<label for="arl" class="col-sm-3 control-label">ARL</label>
							<div class="col-sm-7">
								<select name="idARL" id="arl">
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
							<label for="afp" class="col-sm-3 control-label">AFP</label>
							<div class="col-sm-7">
								<select name="idAFP" id="afp">
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
