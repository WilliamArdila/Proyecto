<?php
error_reporting(0); 
include_once 'conectar.php';
header('Content-type: application/vnd.ms-word');
header("Content-Disposition: attachment; filename=Producto.doc");
 header("Pragma: no-cache");
header("Expires: 0");
    $jorge=conectar();
    $registro=$jorge->query("select codigoProducto,nombreProducto,cantidad,unidad,valorUnitario from producto order by codigoProducto asc ")or die($jorge->error);
 ?>	
 <style type="text/css">
 		 .tablalistado{
      background-color: white;
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: auto;
    }
    .tablalistado th{
      border:1px solid #6A9E98;
    }
    .tablalistado td{
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73; 
    }
 </style>	
 <img src="http://localhost/klimatizar 1.0/images/LOGO KLIMACOL.jpg" />
 <h1>LISTADO DE PRODUCTOS</h1>
 <?php 
 echo '<table class="tablalistado">';
echo '<tr><th>Codigo</th><th>Nombre</th><th>Unidad</th><th>Valor unitario</th><th>Cantidad</th></tr>';
while ($row=$registro->fetch_array()) {
	echo '<tr>';
	echo '<td>';
	echo $row['codigoProducto'];
	echo '</td>';
	echo '<td>';
	echo $row['nombreProducto'];
	echo '</td>';
	echo '<td>';
	echo $row['unidad'];
	echo '</td>';
	echo '<td>';
	echo $row['valorUnitario'];
	echo '</td>';
	echo '<td>';
	echo $row['cantidad'];
	echo '</td>';
	?>
<?php 

	echo '</tr>';
}
echo '</table>';

$jorge->close();

 ?>
