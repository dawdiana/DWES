<?php
	//variable con conexión a nuestra base de datos
	$db = mysqli_connect('localhost', 'root', '1234','mysitedb') or die ('Fail');
?>

<html>
	<header>
		<style>

			/*CSS PARA APLICARLE ESTILOS A LA PÁGINA*/

			/*Estilo etiqueta de imagen*/
			img {
				width: 260px;
				height: 200px;
				filter: drop-shadow(0 0 5px lime);
				text-align = center;
			}

			/*Estilo etiqueta encabezado 1*/
			h1 {
				text-decoration: underline;
				text-align: center;
			}

			/*Estilo de div*/
			div {
				text-align: center;
				border-color: black;
				background-color: rosybrown;
				padding-bottom: 90px;
			}

			/*Estilo de la tabla*/
			table {
				margin: 0 auto;
			}

			/*Estilo de las celdas de encabezado de la tabla*/
			 th {
			   background-color: black;
			   width: 650px;
			   padding-bottom: 40px;
			}

			/*Estilo de las celdas normales de la tabla*/
			 td {
			   background-color: DarkSlateGray;
			   width: 300px;
			   text-align: center;
			}



		</style>
	</header>



	<body> <!--Cuerpo de la página-->
		<h1>Conexión establecida</h1>

	<div> <!--Contenedor-->
	<table>
		<?php
			//usamos la variable con la conexión de la página para lanzar una consulta*/

			$query = 'select * from tCanciones'; //variable que selecciona todos los datos de la tabla de canciones mediante una consulta de código sql*/
			$result = mysqli_query ($db, $query) or die('Query error'); //nos conectamos y mostramos los datos o el programa nos señala un error*/


			//bucle que recorre el resutado:

			/*
			Bucle que va mostrando los resultados de la consulta.
			El nombre de la canción va enalzado al id de esta en detail.php, abriendose
			esta página con los comentarios de la canción si clicas el título.
			los row representan las diferentes celdas.
			*/
			while ($row = mysqli_fetch_array($result)) {
				echo '<tr><th><h2><a href="/detail.php?id='.$row['id'].'" >'.$row[1].'</h2>';
				echo '<img src=' .$row[2]. '/></th>';
				echo '<br>';
				echo '<td><h3><u>Grupo:</u> '.$row[4].'</h3>';
				echo '<h3><u>Duración:</u> ' .$row[3]. ' segundos</h3></td>';
				echo '</tr>';
		}

			mysqli_close($db); /*al terminar de mostrar los datos, la conexión se cierra*/
		?>
	</table>
	</div>
	</body>
</html>
