 <?php 
 $codigo=$_POST['codigo'];
include 'conectar.php';
$jorge=conectar();
$luis=conectar();
$registros=$jorge->query("select codigoObra from obra where codigoObra='".$codigo. "'")or die($jorge->error);
if ($registros==true) 
{
	$row=$registros->fetch_array();
	if ($row[0]==$codigo) 
		{
			header("Location:fichaTecnica.php");
			exit();
		}else
			{
				$luis->query("insert into obra(codigoObra,contratante,nombreObra)
					values ('$codigo','$_REQUEST[contratante]','$_REQUEST[NombreObra]')")
				or die($luis->error);
				$jorge->query("insert into fichaTecnica(descripcion,fechaInicio,fechaFin,duracion,valorTotalProyecto,Obra_codigoObra,Empleado_Documento)
					values('$_REQUEST[decripcion]','$_REQUEST[FechaI]','$_REQUEST[FechaN]','$_REQUEST[Duracion]','$_REQUEST[valor]','$codigo','$_REQUEST[codigoEmple]')")
				or die($jorge->error);
				header('Location: GestionEmple.php');
					exit();
					
			}
}else
	{
	 header('Location:fichaTecnica.php');
	 exit();
	}
	$jorge->close();
	$luis->close();
  ?>
