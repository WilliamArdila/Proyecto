<?php 
session_start();
include "conectar.php";
 ?>
 <?php 
$usuario=$_POST['nombreUsuario'];
$password=$_POST['password'];
if(empty($usuario)||empty($password))
{
 header('Location:../publicidad/loguin.php');	
 exit();
}
?>
<?php 
$jorge=conectar();
$registro=$jorge->query("select Usuario,Contrasena from usuario where Usuario='" . $usuario . "'")
or die($jorge->error);
		if($registro==true)
		{
			$row=$registro->fetch_array();
			if ($row['Usuario']==$usuario & $row['Contrasena']==$password) 
			{
				$j=$jorge->query("select empleado.Documento, empleado.NombreCompleto as Nombre from empleado inner join usuario on Usuario.Empleado_Documento=empleado.Documento where Usuario='" . $usuario . "'");
				$jo=$j->fetch_array();
				$_SESSION['usuario']=$jo['Nombre'];

			    $_SESSION['estado']=1;
				header("Location:index.php");
			}else
			{
				 $_SESSION['estado']=0;
				 
				header("Location:../publicidad/loguin.php");
			}
		}else
		{
			header("Location:../publicidad/loguin.php");
		}
  ?>

