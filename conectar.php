<?php 
function conectar()
{
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_database='klimatizar';

$jorge=new mysqli($db_host,$db_user,$db_pass,$db_database);
if($jorge->connect_error)
die('Problemas con la conexion a la base de datos');
return $jorge;
}
 ?>