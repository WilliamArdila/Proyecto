<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Empleado</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

$jorge->query("update empleado set
				NombreCompleto='$_REQUEST[nombreCompleto]',Direccion='$_REQUEST[Direccion]',
				Telefono='$_REQUEST[Telefono]',Correo='$_REQUEST[Correo]',
				FechaNacimiento='$_REQUEST[FechaN]',Cargo_codigoCargo='$_REQUEST[Cargo]',EPS_idEPS='$_REQUEST[idEPS]',
				ARL_idARL='$_REQUEST[idARL]',AFP_idAFP='$_REQUEST[idAFP]'
				where Documento='$_REQUEST[Documento]'"
			)	or die($jorge->error);
$jorge->close();
  header('Location:GestionEmple.php');
  ?>
</body>
</html>
