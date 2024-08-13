<?php
$destino =  'j.ruizmontenegro05@gmail.com';
$nome = $_POST['nombre'];
$mail = $_POST['mail'];
$mensaje = $_POST['mensaje'];
$contenido = 'Este mensaje fue enviado por:' . $nombre . $apellido . ' \r\n'.'  Su e-mail es:' . $mail . ' \r\n'. ' Mensaje: '.$mensaje . 'Enviado el ' . date('d/m/Y', time());
mail($destino, "Contacto", $contenido);
##echo 'Mensaje enviado correctamente';
?>
