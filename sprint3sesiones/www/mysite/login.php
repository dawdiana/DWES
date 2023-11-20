<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
	
	//Cogemos el correo y la contraseña señalados por el usuario
	$email_posted = $_POST['email'];
	$password_posted = $_POST['password'];
	
	//Si el email está dentro de la lista, seleccionamos el id y la contraseña del usuario
	$query = "select id, contraseña from tUsuarios where email = '".$email_posted."'";
	$query_result = mysqli_query($db, $query) or die('Query error');

	if (mysqli_num_rows($query_result) > 0) {

		//asignamos el valor de la fila a una variable
		$only_row = mysqli_fetch_array($query_result);

		// Hasheamos la contraseña introducida por el usuario
	//	$hashed_password = password_hash($password_posted, PASSWORD_DEFAULT);

		//Si la contraseña hasheada de la base de datos, es igual a la contraseña 
		//hasheada que introdujo el usuario
		if (password_verify($password_posted ,$only_row['contraseña'])) {
			session_start();
			$_SESSION['user_id'] = $only_row['id'];
			header('Location: main.php');
		} else {
			echo '<p>Contraseña incorrecta</p>';
		}

	} else {
		echo '<p>Usuario no encontrado con ese email</p>';
	}

	mysqli_close($db);
?>
