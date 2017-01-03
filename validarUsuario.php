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
$registro=$jorge->query("select Usuario,Contrasena,visibilidad from usuario where Usuario='" . $usuario . "'")
or die($jorge->error);
		if($registro==true)
		{
			$row=$registro->fetch_array();
				if($validar=password_verify($password, $row['Contrasena'])&$row['Usuario']==$usuario & $row['visibilidad']==1){
				$j=$jorge->query("select empleado.Documento, empleado.NombreCompleto as Nombre from empleado inner join usuario on Usuario.Empleado_Documento=empleado.Documento where Usuario='" . $usuario . "'");
				$jo=$j->fetch_array();
				$_SESSION['usuario']=$jo['Nombre'];
				$_SESSION['empleado']=$jo['Documento'];
			    $_SESSION['estado']=1;
				header("Location:../controlers/Principal.php");
				}
			else
			{
				 $_SESSION['estado']=0;
				  echo '<script type="text/javascript">	
					alert("Usuario o contraseña incorrecta");
					window.location="../publicidad/loguin.php";
					</script>'; 
			}
		}else
		{
			$_SESSION['estado']=0;
			header("Location:../publicidad/loguin.php");
		}
  ?>

