<?php 
include "../controlers/conectar.php";
 ?>

<?php 
$luis=conectar();
$jorge=conectar();
		$luis->query("delete from usuario where Usuario=$_REQUEST[Documento]")
		or die($luis->error);
		$luis->query("alter table usuario auto_increment=1")or die($luis->error);
		$luis->close();
				$jorge->query("delete from empleado where Documento=$_REQUEST[Documento]")
			or die($jorge->error);
		$jorge->close();
	header("Location:../controlers/GestionEmple.php");
 ?>