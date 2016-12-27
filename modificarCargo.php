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
  <title>Klimatizar_Empleado</title>

      
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link   rel="shortcut icon" href="../images/LOGO KLIMACOL.jpg" type="image/x-icon">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <style type="text/css">
        body {
          background-color: gray 
        }
            .boton{
        font-size:18px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:#045FB4;
        border:0px;
        width:100px;
        height:30px;
       }
       input:hover {background:#E6E6E6;}       
       input:focus:hover {background: #CEF6F5;
       }
        .contenedor {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  margin: auto;
  background-color:gray solid;
  width:550px;
  height: auto;
  border-radius: 10px;
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
      <li  class="active"><a href="GestionEmple.php"><span class="fa fa-home fa-fw"></span>Home</a></li>
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
      <li  class="active"><a href="fichaTecnica.php"><span class="fa fa-cog fa-spin fa-1x fa-fw"></span> Ficha Tecnica</a></li>
      <li  class="active"><a href="#"><span class="fa fa-check-square-o"></span> Kardex</a></li>
      <li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span> Consulta 
      <span class="caret"></a>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="cosultaEmpleado.php" >Empleado</span></a></li> 
    <li><a href="consultaCargo1.php">Cargo</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
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
<?php 
include 'conectar.php';
 ?>  
<?php 
$jorge=conectar();
$registro=$jorge->query("select NombreCargo,Descripcion from cargo where codigoCargo=$_REQUEST[codigoCargo]")
or ($jorge->error);
if($reg=$registro->fetch_array())
{
 ?>
   <br>
  <br>
  <br>
  <br>
  <br>
  <section class="contenedor"><center>
<br>
 <form method="POST" action="modificarCargo1.php">
   <div>
     <label>codigo</label>
     <label style="width: 200px;margin-left:60px;border-radius: 5px;"><?php echo $_REQUEST['codigoCargo'] ?></label>
     <br>
     <label>NombreCargo</label>
     <input type="text" name="nombreCargo" value="<?php echo $reg['NombreCargo']; ?>" style="width: 200px;margin-left: 13px;border-radius: 5px;" required>
     <br>
     <label>Descripcion</label>
     <input type="text" name="Descripcion" value="<?php echo $reg['Descripcion']; ?>" style="width:200px;margin-left:25px;border-radius: 5px;">
     </div>
      <input type="hidden" name="codigoCargo" value="<?php echo $_REQUEST['codigoCargo']; ?>">
      <br>
<input class="btn btn-primary" type="submit" value="Confirmar" style="margin-left:auto;border-radius:5px;">
<br>
 </form>
 </center>
 <br>
 </section>
 <br>
 <br>
<form action="Cargo1.php"><center>
  <input type="submit" value="volver" style="border-radius:5px;" class="btn btn-primary">
</center>
</form>
  <?php 
 }else
 $jorge->close(); 
 ?>
 <script src="http://code.jquery.com/jquery.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>