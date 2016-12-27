
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginacion</title>
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
	</style>
</head>
<body>
</body>
</html>
<?php
include 'function.php';
$jorge=conectar();
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 10; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "producto order by nombreProducto asc"; //you have to pass your query over here
        echo "<center>";
        echo '<table border="1px">';
        echo "<tr><th>Producto</th></tr>";
		$res=$jorge->query("select * from {$statement} LIMIT {$startpoint} , {$limit}");
		while($row=$res->fetch_array())
		{
		echo "<tr>";
		echo "<td>";
		echo $row['nombreProducto'];
		echo "</td>";
		echo "</tr>";
		}
?>
<?php
echo "</table>";
echo '<div id="pagingg"  >';
echo pagination($statement,$limit,$page);
echo "</div>";
?>