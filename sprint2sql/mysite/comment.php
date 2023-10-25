<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<!--Esta página se encarga de recibir el post y procesarlo haciendo una inserción en
	    la base de datos y ofreciendo un enlace para volver a la página anterior.-->

	<body>
		<?php
			$id = $_POST['id'];
			$comentario = $_POST['new_comment'];

	$query = "INSERT INTO tComentarios(comentario, usuario_id, cancion_id, fechaP) VALUES (' ".$comentario."',NULL,".$id.",now())";


	mysqli_query($db, $query) or die('Error');

	echo "<p>Nuevo comentario ";
	echo mysqli_insert_id($db); /*Función que devuelve el id de la fila*/
	echo " añadido</p>";

	echo "<a href='/detail.php?id=".$id."'>Volver</a>";
	mysqli_close($db);
		?>
	</body>
</html>
