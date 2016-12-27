<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar Empleado</title>
</head>
<body>
<?php 
include "contrasena.php";
 ?>
<?php 
include "conectar.php";
?>	
<?php 
$docu=$_POST['documento'];
$jorge=conectar();
$luis=conectar();
$pass=generaPass();
$registros=$jorge->query("select Documento from empleado where Documento ='" . $docu . "'")
or die($jorge->error);

if ($registros==true) {
	$row=$registros->fetch_array();
	if($row[0]== $docu){ 
		  header('Location: Registrar empleado.php');
			exit();
		}else{
				$jorge->query("insert into empleado(Documento,NombreCompleto,Direccion,Telefono,Correo,FechaNacimiento,Cargo_codigoCargo,EPS_idEPS,ARL_idARL,AFP_idAFP)
			values
			('$_REQUEST[documento]','$_REQUEST[nombreCompleto]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[correo]','$_REQUEST[fecha]','$_REQUEST[codigoCargo]','$_REQUEST[idEPS]','$_REQUEST[idARL]','$_REQUEST[idAFP]')") or
			die($jorge->error);
			$luis->query("insert into usuario(Usuario,Contrasena,Empleado_Documento)
				values ('$docu','$pass','$docu')") or die($luis->error);
			
$para=$_POST['correo'];
$asunto='Usuario Klimatizar';
$mensaje="Usuario:$docu \n Clave: $pass";
$cabeceras = 'From: jorgecanchon@gmail.com' . "\r\n" .
             'Reply-To: remitente@dominio.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

mail($para, $asunto, $mensaje, $cabeceras);
			header('Location: GestionEmple.php');
			exit();
		}
}else
{
	header('Location: Registrar empleado.php');
	exit();
}
$jorge->close();

  ?>
</body>
</html>