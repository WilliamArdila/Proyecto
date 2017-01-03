<?php 
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_database='klimatizar';

$jorge=new mysqli($db_host,$db_user,$db_pass,$db_database);
if($jorge->connect_error)
die('Problemas con la conexion a la base de datos');

		$jorge->query("update cargo set visibilidad=0 where codigoCargo=$_REQUEST[codigo]")
			or die($jorge->error);
		$jorge->close();
		header('Location: Cargo1.php');
 ?>
