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
	<title>Producto</title>
	<style type="text/css">	
		#pagingg ul.pagination{
  margin:0px;
  padding:0px;
  height:100%;
  overflow:hidden;
  font:12px 'Tahoma';
  list-style-type:none;
  color:blue; 
}

#pagingg ul.pagination li.details{
    padding:7px 10px 7px 10px;
    font-size:14px;
}
#pagingg ul.pagination li{
  float:left;
  margin:0px;
  padding:0px;
  margin-left:5px;
}
#pagingg ul.pagination li:first-child{
  margin-left:0px;
}
#pagingg ul.pagination li a{
  display:block;
  text-decoration:none;
  padding:7px 10px 7px 10px;
  color:blue;
    border: 1px solid #7C7C7C;
    border-radius: 3px;
    background-color:#FAFAFA solid;

  
}

#pagingg ul.pagination li a img{
  border:none;
}
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
</head>
<body>
<h1>Listado productos</h1>	
<?php 
include 'function.php';
 ?>
 <?php 
$jorge=conectar();
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 10; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "producto order by codigoProducto asc";

echo '<table class="tablalistado">';
echo '<tr><th>Codigo</th><th>Nombre</th><th>cantidad</th><th>Unidad</th><th>Valor unitario</th><th>proveedor</th></tr>';
$res=$jorge->query("select * from {$statement} LIMIT {$startpoint} , {$limit} ");
while ($row=$res->fetch_array()) {
	echo '<tr>';
	echo '<td>';
	echo $row['codigoProducto'];
	echo '</td>';
	echo '<td>';
	echo $row['nombreProducto'];
	echo '</td>';
	echo '<td>';
	echo $row['cantidad'];
	echo '</td>';
	echo '<td>';
	echo $row['unidad'];
	echo '</td>';
	echo '<td>';
	echo $row['valorUnitario'];
	echo '</td>';
	?>
	<td>
  <?php
echo '<a href="verProveedor.php?codigoProducto='.$row['codigoProducto'].'">proveedor</a>';
?>
</td>
<?php 

	echo '</tr>';
}
echo '</table>';
echo "<br>";
echo '<div id="pagingg"  >';
echo pagination($statement,$limit,$page);
echo "</div>";

$jorge->close();
  ?>
</body>
</html>