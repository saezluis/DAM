<?php
	include "config.php";
		
	$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
	$acentos = $conexion->query("SET NAMES 'utf8'");
	
	$nombre = $_REQUEST['nombre'];
	$telefono = $_REQUEST['telefono'];
	$asunto = $_REQUEST['asunto'];
	$comentario = $_REQUEST['comentario'];
	
		$to = "contacto@promocionlucchetti.cl";
		$subject = "$asunto";
		$headers = "De: $nombre";
		$message = "Un visitante de tu sitio te ha enviado el siguiente email para que atiendas a su comentario.
		\n Nombre y Apellido: $nombre
		\n Teléfono: $telefono		
		\n Comentario: $comentario
		";
		
		mail($to,$subject,$message,$headers);
		
		mysqli_query($conexion,"INSERT INTO contacto(nombre,telefono,asunto,comentario) values 
									('$nombre',
									'$telefono',
									'$asunto',
									'$comentario'
									)")
								or die("Problemas con el insert de usuario");
		
		header('Location: index.php');
		
?>