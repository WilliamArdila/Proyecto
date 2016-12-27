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
	<title>Ingreso</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>
 <?php
 $id=$_POST['nombreCargo'];
$jorge=conectar();
$registros=$jorge->query("select NombreCargo from cargo where NombreCargo ='" .$_REQUEST[nombreCargo]. "'")
or die($jorge->error);

	if ($registros==true) {
		$row=$registros->fetch_array();
		if($row[1]==$id)
		{
			header('Location: RegistrarCargo.php');
				exit();
		}else
			{

				$jorge->query("insert into cargo(NombreCargo,Descripcion) values('$_REQUEST[nombreCargo]','$_REQUEST[descripcion]')") or die($jorge->error);
				$jorge->close();
				echo "La nueva categoria se almacenó"; 
				header('Location:Cargo1.php');
				exit();
			}
	}else
		{
			header('Location: RegistrarCargo.php');
			exit();
		}

$jorge->close();
  ?>
 <br>	
</body>
</html>