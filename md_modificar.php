<!-- Modal -->
	<div class="modal fade" id="edt_Persona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class='fa fa-pencil'></i> Modificar Empleado</h4>
				</div>
				<form class="form-horizontal" method="POST" action="modificarEmpleado.php">
					<div class="modal-body">
					<!-- DOCUMENTO -->
						<div class="form-group">
							<label for="Documento" class="col-sm-3 control-label">Documento</label>
							<div class="col-sm-8">
								<input class="form-control" placeholder="Ingrese documento" value="" id="codPersona" name="Documento" required>
								 <input type="hidden" value="" id="Documento" name="Documento">
							</div>
						</div>
						<!-- NOMBRE COMPLETO -->
						<div class="form-group">
							<label for="nombreCompleto" class="col-sm-3 control-label">Nombre Completo</label>
							<div class="col-sm-8">
								<input class="form-control" placeholder="Ingrese nombre completo" id="nombreCompleto" name="nombreCompleto" required>
								 <input type="hidden" value="" id="Documento" name="Documento">
							</div>
						</div>
						<!-- Direccion -->
						<div class="form-group">
							<label for="Direccion" class="col-sm-3 control-label">Direccion</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" placeholder="ingrese direccion" id="Direccion" name="Direccion" required>
							</div>
						</div>
						<!-- Telefono -->
						<div class="form-group">
							<label for="Telefono" class="col-sm-3 control-label">Telefono</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Ingrese Telefono" id="Telefono" name="Telefono" required  maxlength="9">
							</div>
						</div>
						<!-- Correo -->
						<div class="form-group">
							<label for="Correo" class="col-sm-3 control-label">E-mail</label>
							<div class="col-sm-7">
								<input type="email" class="form-control" placeholder="Ingrese Email" id="emaPersona" name="Correo" required>
							</div>
						</div>
						<!-- Fecha Nacimiento-->
						<div class="form-group">
							<label for="FechaN" class="col-sm-3 control-label">Fecha Nacimiento</label>
							<div class="col-sm-5">
								<input type="date" class="form-control" placeholder="Ingrese Fecha Nacimiento" id="FechaN" name="FechaN"  >
							</div>
						</div>
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