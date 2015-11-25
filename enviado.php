<?php
if($_POST["nombre"] && $_POST["email"] && $_POST["consulta"] != ""){
	$de = $_POST["nombre"];
	$destino = "info@it360.com.ar";
	$asunto = "Consulta via web";
	$mensaje .= "FORMULARIO."."\n";
	$mensaje .= "\n";
	$mensaje .= "NOMBRE: " . utf8_decode($_POST["nombre"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "Tel: " . utf8_decode($_POST["telefono"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "Consulta: " . utf8_decode($_POST["consulta"]) ."\n";
    $emailheader = "From: Blow Consulta <info@it360.com.ar>\r\n";
	mail($destino, $asunto, $mensaje, $emailheader) or die ("false");
	echo "true";
	} else {
    	echo "false;"
     }
}
?>