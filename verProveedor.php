<?php 
include 'conectar.php';
 ?>
 <?php 
$jorge=conectar();
$docu=$_REQUEST['codigoProducto'];
$registro=$jorge->query("select nombreProveedor from  proveedor inner join proveedor_producto on NIT=Proveedor_NIT where Producto_codigoProducto='" . $docu . "'")or die($jorge->error);

while($row=$registro->fetch_array())
{
echo $row['nombreProveedor'];
echo '<br>';
}
  ?>
