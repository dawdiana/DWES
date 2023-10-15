<html>
	<body>
		<h1>Jubilación</h1>

	   <?php
		function edad_en_13_años($edad) {
			return $edad + 13;
		}

		function mensaje($age) {
		   if(edad_en_13_años($age) > 65) {
			return "En trece años tendrás edad de jubilaión";
		} else {
			return "¡Disfruta de tu tiempo!";
			}
		}
	    ?>

	<table>
		<tr>
			<th>Edad</th>
			<th>Info</th>
		</tr>

		<?php
			$lista = array(51,52,53,54,55);
			foreach ($lista as $valor) {
				echo "<tr>";
				echo "<td>".$valor."</td>";
				echo "<td>".mensaje($valor)."</td>";
				echo "</tr>";
				}
		?>
	</table>
	</body>
</html>
