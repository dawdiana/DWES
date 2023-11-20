<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<!--Esta página se encarga de recibir el post y procesarlo haciendo una inserción en
	    la base de datos y ofreciendo un enlace para volver a la página anterior.-->

	<body>
		<?php
			session_start(); // Crea una sesión o identifica una ya existente, siempre se invoca antes de acceder a $_SESSION
			$user_id_a_insertar = 'NULL';
			if (!empty($_SESSION['user_id'])) {
				$user_id_a_insertar = $_SESSION['user_id'];
			}

			$cancion_id = $_POST['cancion_id'];
			$comentario = $_POST['new_comment'];

	$query = "INSERT INTO tComentarios(comentario, usuario_id, cancion_id, fechaP) VALUES ('".$comentario."',".$user_id_a_insertar.",".$cancion_id.", current_timestamp)";
	echo "Consulta de sql para verificar que se vea el id del usuario: " .$query;

	mysqli_query($db, $query) or die('Error');

	echo "<p>Nuevo comentario ";
	echo mysqli_insert_id($db); /*Función que devuelve el id de la fila*/
	echo " añadido</p>";

	echo "<a href='/detail.php?cancion_id=".$cancion_id."'>Volver</a>";
	mysqli_close($db);
		?>
	</body>
</html>
