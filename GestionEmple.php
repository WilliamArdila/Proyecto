<?php 
/*/session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}/*/
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Klimatizar-Empleado</title>
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link   rel="shortcut icon" href="../images/LOGO KLIMACOL.jpg" type="image/x-icon">
      <link rel="stylesheet" href="../css/bootstrap.css">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <style type="text/css">
        body {
          background-color: gray 
        }
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
     .contenedor {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  margin: auto;
  background-color:gray;
  width: auto;

}
@media (min-width: 768px) {
  .contenedor {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .contenedor {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .contenedor {
    width: 1170px;
  }
}
.contenedor-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
      </style>
  </head>
    <body>
    <section class="heade" >
  <div class="head">
    <ul class="nav nav-pills"  >
      <li><img src="../images/LOGO KLIMACOL.jpg" style="border-radius:5px;width: 100px;margin: 10px;"></li>
      <li style="visibility: hidden;">-</li>
      <li  class="active"><a href="principal.php"><span class="fa fa-home fa-fw"></span>Home</a></li>
      <li  class="active" ><a href="#" data-toggle="dropdown"  ><span  class="fa fa-user bigicon"></span>  Gestion de Empleados 
      <span class="caret"></span></a>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="Registrar empleado.php" >Registrar Empleado</span></a></li> 
      <li><a  href="RegistrarCargo.php">Registrar Cargo</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Regular link</a></li>
          <li><a class="dropdown-item disabled" href="#">Disabled link</a></li>
          <li><a class="dropdown-item" href="#">Another link</a></li>
        </ul>
      </li>
    <li><a  href="#" class="dropdown-item disabled">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a  href="#">Separated link</a></li>
  </ul>
  </li>
          <li  class="active"><a data-toggle="dropdown"  href="fichaTecnica.php"><span class="fa fa-cog fa-spin fa-1x fa-fw"></span> Ficha Tecnica  <span class="caret"></span></a>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="#">Registrar obra</span></a></li> 
  <li><a href="fichaTecnica.php">Registrar ficha tecnica</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
      <li  class="active"><a href="#"  data-toggle="dropdown"><span class="fa fa-check-square-o"></span> Kardex <span class="caret"></span></a>
      <ul class="dropdown-menu" role="Menu" >
    <li><a href="Registrar empleado.php" >Solicitud de material</span></a></li> 
      <li><a  href="RegistrarCargo.php">Orden de compra</a>
          <li><a class="dropdown-item" href="#">Remision de material</a></li>
      </li>
  </ul></li>
      <li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span> Consulta 
      <span class="caret"></a>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="consultaEmpleado1.php">Empleado</span></a></li> 
    <li><a href="consultaCargo1.php">Cargo</a></li>
    <li><a href="#">Ficha tecnica</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">kardex</a></li>
  </ul>
      </li> 
       <li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span>Reportes<span class="caret"></a>
      <ul class="dropdown-menu" role="Menu" >
      <li><a href="reporte Producto.php">Producto</a></li> 
      <li><a href="#">Proveedor</a></li>
      <li><a href="#">Kardex</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="">Ficha tecnica</a></li>
    </ul>
       </li>
      <li  class="active" style="visibility: hidden;"><a href="#">--------------</a></li>

<div class="head1" class="derecha">
    <ul class="nav nav-pills">
      <li><img src="../images/sesion1.jpg" style="border-radius:55px;width: 50px;margin: 5px;" data-toggle="dropdown">
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="#"  data-toggle="dropdown">Informacion Personal</a></li> 
    <li><a href="#">sdfgh</a></li>
    <li><a href="#">fvgbhj</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
  </ul>
      </li> 
      </ul>
  </div>  
  </section>
  <br>
  <br>
  <br>
    <div class="row">
      <div class="col-md-2 col-md-offset-10">
        <button class="btn btn-primary" data-toggle="modal" data-target="#inst_Persona">
          Agregar
          <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
        </button>
      </div><!-- /.span -->
    </div>
  <br>
  <br>

  <section class="contenedor">
  <fieldset>
  <legend><h1 style="color:black;">CRUD GERENTE</h1></legend> 

<?php 
include 'function.php';
 ?>
<?php 
$jorge=conectar();
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
      $limit = 5; //if you want to dispaly 10 records per page then you have to change here
      $startpoint = ($page * $limit) - $limit;
      $statement = " empleado  order by NombreCompleto asc"; //you have to pass your query over here

$registros=$jorge->query(" select empleado.Documento, empleado.NombreCompleto as Nombre, empleado.Direccion, empleado.Telefono, empleado.Correo, empleado.FechaNacimiento, cargo.NombreCargo as Cargo, EPS.nombreEPS as EPS, ARL.nombreARL as ARL, AFP.nombreAFP as AFP from empleado  inner join cargo
  on cargo.codigoCargo=empleado.Cargo_codigoCargo inner join EPS  on EPS.idEPS=empleado.EPS_idEPS inner join ARL on ARL.idARL=empleado.ARL_idARL inner join AFP on AFP.idAFP=empleado.AFP_idAFP order by Nombre asc LIMIT {$startpoint} , {$limit}");

echo '<table class="tablalistado">';
echo '<tr><th>Documento</th><th>Nombre</th><th>Direccion</th><th>Telefono</th><th>E-mail</th><th>Fecha Nacimiento</th><th>Cargo</th><th>EPS</th><th>ARL</th><th>AFP</th><th width="7%"> </th></tr>';
while ($reg=$registros->fetch_array())
{
  echo '<tr>';
  echo '<td>';
  echo $reg['Documento'];
  echo '</td>';
  echo '<td>';
  echo $reg['Nombre'];
  echo '</td>';
  echo '<td>';
  echo $reg['Direccion'];
  echo '</td>';
  echo '<td>';
  echo $reg['Telefono'];
  echo '</td>';
  echo '<td>';
  echo $reg['Correo'];
  echo '</td>';
  echo '<td>';
  echo $reg['FechaNacimiento'];
  echo '</td>';
  echo '<td>';
  echo $reg['Cargo'];
  echo '</td>';
  echo '<td>';
  echo $reg['EPS'];
  echo '</td>';
  echo '<td>';
  echo $reg['ARL'];
  echo '</td>';
  echo '<td>';
  echo $reg['AFP'];
  echo '</td>';
  
  ?>
  <td>
  <?php
echo '<a href="modificarEmpleado.php?Documento='.$reg['Documento'].'" class="btn btn-sm btn-warning btn-editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

echo '<a href="../Crud/eliminarEmple.php?Documento='.$reg['Documento'].'" class="btn btn-sm btn-danger btn-eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
?>
    <input type="button" onclick="ConfirmDemo()" value="Click" />
    </td>

  <?php
  echo '</tr>';
}
echo '</table>';
echo '<br>';
echo '<div id="pagingg">';
echo pagination($statement,$limit,$page);
echo "</div>";
$jorge->close();

 ?>
  <?php  
  include('../Crud/md_agregar.php');
  ?>
  <br>
  <br>
</fieldset>  
</section>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
function ConfirmDemo() {
//Ingresamos un mensaje a mostrar
//Detectamos si el usuario acepto el mensaje
var id=this.id;
var mensaje = confirm("Eliminara todo de forma permanente \n ¿Desea Continuar?");
if (mensaje) {
 window.location="../Crud/eliminarEmple.php?Documento="+$id;
}else
  {
    window.location="GestionEmple.php";
  }
}
</script>
</body>
</html>

<!--Consulta de tecnicos 
select * from empleado inner join cargo on cargo.codigoCargo=empleado.Cargo_codigoCargo  where NombreCargo like 'tec%';-->