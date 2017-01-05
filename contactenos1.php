<?php 
$ema=$_POST['email'];
$message=$_POST['message'];
$nombre=$_POST['name'];
$apellido=$_POST['names'];
$telefono=$_POST['phone'];
$para='jorgecanchon@gmail.com';
$asunto='Contactenos Klimatizar';
$mensaje="Nombre:$nombre $apellido \ncorreo:$ema \nTelefono:$telefono \nmensaje:$message";
$cabeceras = 'From:$ema' . "\r\n" .
             'Reply-To:Mensajegenerado' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
if(mail($para, $asunto, $mensaje, $cabeceras))
	{
		echo '<script type="text/javascript">	
					alert("Mensaje enviado con exito");
					window.location="contactenos.html";
					</script>'; 
	}
	else
		{
			echo '<script type="text/javascript">	
					alert("Error al enviar el mensaje");
					window.location="contactenos.html";
					</script>'; 
		}

 ?>
