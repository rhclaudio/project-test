<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
$destino = "rhclaudio@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre : " .  $nombre . "\nCorreo: " . $correo . "\nTelefono :" . $telefono . "\nMensaje :" . $mensaje;
mail ($destino,"Contacto",$contenido);
header ("Location: gracias.html");
?>
</body>
</html>