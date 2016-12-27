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
	<title>Modificar Cargo</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

$jorge->query("update cargo set
				NombreCargo='$_REQUEST[nombreCargo]',Descripcion='$_REQUEST[Descripcion]'
				where codigoCargo='$_REQUEST[codigoCargo]'"
			)	or die($jorge->error);
$jorge->close();
  header('Location:Cargo1.php');
  ?>
</body>
</html>