<?php //Documento para logout
	session_start();
	session_destroy(); //cierra la sesión
	header('Location: login.html'); //Nos vuelve a la página de inicio de sesión
?>
