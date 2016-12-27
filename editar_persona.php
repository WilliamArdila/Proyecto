<?php 
include "../conectar.php";
 ?>	
 <?php 
$jorge=conectar();
$id=$_POST['Documento'];
$nombre=$_POST['Nombre'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$correo=$_POST['Correo'];
$fechaN=$_POST['FechaN'];
$cargo=$_POST['Cargo'];
$eps=$_POST['idEPS'];
$arl=$_POST['idARL'];
$afp=$_POST['idAFP'];
$jorge->query("update empleado set
				NombreCompleto='$nombre',Direccion='$direccion',
				Telefono='$telefono',Correo='$correo',
				FechaNacimiento='$fechaN',Cargo_codigoCargo='$cargo',EPS_idEPS='$idEPS',
				ARL_idARL='$idARL',AFP_idAFP='$idAFP'
				where Documento='$id'"
			)	or die($jorge->error);
$jorge->close();
  header('Location:../GestionEmple.php');
  ?>