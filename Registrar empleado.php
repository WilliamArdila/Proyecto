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
      <title>Klimatizar-Registrar Empleado</title>

      
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
  <br>
  <br>
 <section class="contenedor">
       <fieldset>
       <br>
   <center> <legend style="color:#000;">Registrar Empleado</legend>
    <br> 
   <form method="POST" action="RegistrarEmpleado1" style="align-items: center">
       <div>
       <label>
       Documento
       </label>
       <input type="number" name="documento" min=0 style="margin-left: 48px;border-radius: 5px;" placeholder="Documento" required>
       <br>
       <label>
       Nombre Empleado  
       </label> 
       <input type="text" name="nombreCompleto" style="margin-left: 2px;border-radius: 5px;" placeholder="Nombre Completo" required>
       <br>
      <label>
      Direccion  
       </label> 
       <input type="text" name="direccion" style="margin-left: 62px;border-radius: 5px;" placeholder="Direccion" required>
       <br>
       <label>
       Telefono 
       </label> 
       <input type="number" name="telefono" min="0" style="margin-left: 68px;border-radius: 5px;" placeholder="Telefono" required>
       <br>
       <label>
       Correo
       </label>
       <input type="email" name="correo" style="margin-left: 82px;border-radius: 5px;border-radius: 5px;" placeholder="example@example.com" required>
      <br>
       <label>
      Fecha Nacimiento
       </label>
       <input type="date"  style="width: 182px;border-radius: 5px;height: 20px;margin-left:8px; " name="fecha" step="1" required>
        </div>
        <label>
        Seleccione Cargo:
      </label>
      <select name="codigoCargo"  style="width: 182px;height: 20px;margin-left: 10px;border-radius: 5px;" required>
      <?php 
      include 'conectar.php';
       ?>
       <?php 
      $jorge=conectar();
      $registros=$jorge->query("select codigoCargo,NombreCargo from cargo")
      or die($jorge->error);
      while ($reg=$registros->fetch_array()) {
        echo "<option value=\"".$reg['codigoCargo']."\">".$reg['NombreCargo']."</option>";
      }
        ?>
        </select>
      <br>
      <label>
      Seleccione EPS:
      </label>
      <select name="idEPS"   style="width: 182px;height: 20px;margin-left: 22px;border-radius: 5px;">
       <?php 
      $jorge=conectar();
      $registros=$jorge->query("select * from eps")
      or die($jorge->error);
      while ($reg=$registros->fetch_array()) {
        echo "<option value=\"".$reg['idEPS']."\">".$reg['nombreEPS']."</option>";
      }
        ?>
        </select>
        <br>
      <label>
      Seleccione ARL:
      </label>
      <select name="idARL" style="width: 182px;height: 20px;margin-left: 20px;border-radius: 5px;">
       <?php 
      $jorge=conectar();
      $registros=$jorge->query("select * from arl")
      or die($jorge->error);
      while ($reg=$registros->fetch_array()) {
        echo "<option value=\"".$reg['idARL']."\">".$reg['nombreARL']."</option>";
      }
        ?>
        </select>
          <br>
      <label>
      Seleccione AFP:
      </label>
      <select name="idAFP"  style="width: 182px;height: 20px;margin-left: 20px;border-radius: 5px;">
         <?php 
        $jorge=conectar();
        $registros=$jorge->query("select * from AFP")
        or die($jorge->error);
        while ($reg=$registros->fetch_array()) {
          echo "<option value=\"".$reg['idAFP']."\">".$reg['nombreAFP']."</option>";
        }
          ?>
          </select>
        <br>
        <br>
        <input class="btn btn-primary" type="submit" name="Registrar" value="Registrar" class="boton" style="margin-left:auto;border-radius:5px;" >
   </form>
   </fieldset>
  <!--value="<?php echo date("Y-m-d");?>"-->
  <br>
</section>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>