<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
	/*Volvemos a guardar la conexión en una variable*/
?>

<html>
	<header>
		<style>

			/*Diseño visual de la página detail*/

			h1 {
				text-align: center;
			}

			img {
				filter: drop-shadow(0 0 5px lime);
			}


			table h3{
				text-align: center;
				color: darkslategray;
			}

			th {
				background-color: purple;
				width: 400px;
				padding-bottom: 30px;
			}

			td {
				background-color: black;
				width: 200px;
			}

			ul {
				color: purple;
			}

		</style>
	</header>

	<body>
	<div>
	<table>
		<?php
	/*Si el parámetro que recibe la id no se recibe, el programa cierra la ejecución*/
			if(!isset($_GET['id'])) {
			die('No se ha especificado una canción');
			}

	/*Se selecciona la información de la canción correspondiente solamente*/

			$id = $_GET['id'];
			$query = 'SELECT * FROM tCanciones WHERE id='.$id;
			$result = mysqli_query($db, $query) or die('Query error');
			$only_row = mysqli_fetch_array($result);

	/*Y se muestra en pantalla (yo he vuelto a meter mi información en una tabla,
	  esta vez no hemos usado un bucle porque solo necesitamos mostrar la información de una fila*/

			echo '<th><h1>'.$only_row['nombre'].'</h1>';
			echo '<img src='.$only_row['url_imagen'].'></img></th>';
			echo '<td><h3><u>Grupo:</u> '.$only_row['grupo'].'</h3>';
			echo '<h3><u>Duración:</u> '.$only_row['tduracion'].'</h3></td>';
		?>
	</table>
	</div>
			<h3><u>Comentarios:</u></h3>

			<ul>
		<?php

	/*
		Y lanzamos otra consulta pero usando nuestra clave foránea cancion_id para seleccionar
		todos los comentarios asociados a la canción en cuestión recorriendo cada una de
		las filas de la tabla  tComentarios.
	*/
			$query2 = 'SELECT * FROM tComentarios WHERE cancion_id='.$id;
			$result2 = mysqli_query($db, $query2) or die('Query error');
			while ($row = mysqli_fetch_array($result2)) {
				echo '<div><li>'.$row['comentario']."     [ " .$row['fechaP'].']</li></div>'; /*El atributo fechaP es añadido en el último ejercicio mediante el comando alter table en mariaDB*/

			}
	/*Al terminar la ejecución cerramos */
			mysqli_close($db);

		?>
			</ul>


			<!--Código de formulario para añadir comentarios-->
			<!-El formulario envía dos parámetros al cuerpo del post (un new_comment
			con el comentario introducido por el usuario en el textarea y una id
			de canción de tipo oculto para saber qué canción está siendo comentada.--->


			<!--Como podemos observar en el form, se manda una petición a la página 
			de comment.php-->

			<p>Deja un nuevo comentario:</p>
			<form action="/comment.php" method="post">
				<textarea rows="4" cols="50" name="new_comment"></textarea><br>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="submit" value="comentar">
			</form>
	</body>
</html>
