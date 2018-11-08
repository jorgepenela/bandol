<?php

$email = $_POST['email'];

/*----------- INICIO DE CONFIGURACION-----------------*/
//mail del destinatario (escribirlo entre las comillas)
$destino='bandol@bandolbar.com';
//nombre del que envía el correo (escribirlo entre las comillas)
$origen_nombre='Bandol Bar';
//mail del que envía el correo (escribirlo entre las comillas)
$origen_mail='bandol@bandolbar.com';
//título del corrreo (escribirlo entre las comillas)
$subject='Take Away - Bandol web';
//página a la que se va luego de enviar el mail (escribirlo entre las comillas)
$adondevoy='gracias.html';
/*----------- FIN DE LA CONFIGURACION-----------------*/
$headers = "From: $origen_nombre <$origen_mail>\r\n";
$headers .= "Reply-To: $email\r\n"; 
$headers .= "Return-Path: $origen_nombre <$origen_mail>\r\n";  
$mensaje='';
	foreach($_POST as $k => $v){
		if($k!='Submit' && $k!='Enviar'){
			$mensaje.=ucfirst($k).": $v\n";
		}
	}
ini_set(sendmail_from,$origen_mail);
mail($destino,$subject,$mensaje,$headers);
header("Location:$adondevoy");
// Die with a success message
//die("<div class='thanks'>Su solicitud ha sido recibida.</div>");
?>