<?php 
session_start();
unset($SESSION['usuario']);
unset($SESSION['estado']);
$SESSION['estado']=0;
header("Location:../publicidad/loguin.php")
 ?>