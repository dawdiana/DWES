<?php
	$db = mysqli_connect('localhost', 'root', '1234','mysitedb') or die ('Fail');
?>
<html>
	<body>
		<h1>Conexión establecida</h1>

		<?php
			//lanzar un query
			$query = 'select * from tCanciones';
			$result = mysqli_query ($db, $query) or die('Query error');

			//recorrer el resultado
			while ($row = mysqli_fetch_array($result)) {
				echo $row['nombre'];
				echo '<br>';
				echo '<img src=' .$row[2]. '/>';
				echo '<br>';
				echo $row[3];
				echo '<br>';
				echo $row[4];
				echo '<br>';
			}
			mysqli_close($db);
		?>
	</body>
</html>
