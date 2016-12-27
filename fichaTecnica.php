<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
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
      input:focus:hover {background:#BDBDBD;
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

      </li>
      <li  class="active"><a href="#"  data-toggle="dropdown"><span class="fa fa-check-square-o"></span> Kardex <span class="caret"></span></a>
      <ul class="dropdown-menu" role="Menu" >
        <li><a href="Registrar empleado.php" >Solicitud de material</span></a></li> 
          <li><a  href="RegistrarCargo.php">Orden de compra</a>
              <li><a class="dropdown-item" href="#">Remision de material</a></li>
          </li>
      </ul>
     </li>
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
       <li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span>Reportes</a></li>
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
  <section class="contenedor">
  <br>
  <fieldset><center>
  <legend><h1 style="color:black;">FICHA TÉCNICA</h1></legend> 
   <form method="POST" action="fichaTecnica1.php" style="align-items: center">
       <div>
       <label>Seleccione empleado:</label>
      <select name="codigoEmple"  style="width: 182px;height: 25px;margin-left: 10px;border-radius: 5px;" required>
      <?php 
      include 'conectar.php';
       ?>
       <?php 
      $jorge=conectar();
      $registros=$jorge->query("select Documento,NombreCompleto from empleado")
      or die($jorge->error);
      while ($reg=$registros->fetch_array()) {
        echo "<option value=\"".$reg['Documento']."\">".$reg['NombreCompleto']."</option>";
      }
        ?>
        </select>
       <br>
       <label>
      Codigo obra
       </label>
       <input type="text" name="codigo" min=0 style="margin-left: 75px;width:180px;border-radius: 5px;" placeholder="Codigo" required>
       <br>
       <label>
      Nombre Obra
       </label>
       <input type="text" min=0  style="width: 180px;border-radius: 5px;height: 23px;margin-left:65px; " name="NombreObra"  placeholder="Nombre obra" required>
        </div>
        <label>
      contratante
       </label>
       <input type="text"  style="width: 182px;border-radius: 5px;height: 25px;margin-left:80px; " name="contratante"  placeholder="contratante" required>
       <br>
       <label>
       Descripcion 
       </label> 
       <input type="text" name="decripcion" style="width: 182px;margin-left:75px;border-radius: 5px;height: 25px;" placeholder="Descripcion" required>
       <br>
      <label>
      Fecha inicio
       </label> 
       <input type="date" name="FechaI" style="width: 182px;margin-left: 75px;border-radius: 5px;" placeholder="Inicio" required>
       <br>
       <label>
      Fecha fin
       </label> 
       <input type="date" name="FechaN" style="width: 182px;margin-left: 95px;border-radius: 5px;" placeholder="Fin" required>
       <br>
       <label>
       Duracion
       </label>
       <input type="text" name="Duracion" style="width: 182px;margin-left: 95px;border-radius: 5px;" placeholder="Duracion Meses" required>
      <br>
       <label>
      Valor Proyecto
       </label>
       <input type="number" min=0  style="width: 182px;margin-left:60px;border-radius: 5px;height: 25px;" name="valor" placeholder="valor" required>      
        <br>
        <br>
        <input class="btn btn-primary" type="submit" name="Registrar" value="Registrar" class="boton" style="margin-left:auto;border-radius:5px;" >
   </form>
</fieldset>  
 <br>
</section>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
  function validar() {
inicio=document.getElementById('FechaI').value;
final=document.getElementById('FechaN').value;
inicio=new Date(inicio);
final=new Date(final);
if(inicio>final)
alert('Fechas erroneas');
}
</script>
</body>
</html>
