<?php

include ("conectar.php");

	# conectare la base de datos
    $jorge = conectar();
    if(!$jorge){
        die("imposible conectarse: ".mysqli_error($jorge));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include ('pagination.php'); //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($jorge,"SELECT count(*) AS numrows FROM cliente ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = '../prueba.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($jorge,"SELECT * FROM empleado  order by NombreCompleto asc LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered" style="color:black;">
			  <thead>
				<tr>
				    <th>Documento</th>
				    <th>Nombre Completo</th>
				    <th>Direccion</th>
				    <th>Telefono</th>
				    <th>Correo</th>
				    <th>Fecha Nacimiento</th>
				    <th>Cargo</th>
				    <th>EPS</th>
				    <th>ARL</th>
				    <th>AFP</th>
				    <th width="8%"></th>
			    </tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['Documento'];?></td>
					<td><?php echo $row['NombreCompleto'];?></td>
					<td><?php echo $row['Direccion'];?></td>
					<td><?php echo $row['Telefono'];?></td>
					<td><?php echo $row['Correo'];?></td>
					<td><?php echo $row['FechaNacimiento'];?></td>
					<td><?php echo $row['Cargo_codigoCargo'];?></td>
					<td><?php echo $row['EPS_idEPS'];?></td>
					<td><?php echo $row['ARL_idARL'];?></td>
					<td><?php echo $row['AFP_idAFP'];?></td>
					<td>
					 <?php
						echo '<a href="modificarEmpleado.php?Documento='.$row['Documento'].'" class="btn btn-sm btn-warning btn-editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

						echo '<a href="../Crud/eliminarEmple.php?Documento='.$row['Documento'].'" class="btn btn-sm btn-danger btn-eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
						?>
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
		<div class="table-pagination pull-right">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>
