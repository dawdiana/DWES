<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');

	/* Cogemos la información introducida por el usuario */
	$nombre_posted = $_POST['nombre'];
	$apellidos_posted = $_POST['apellidos'];
	$email_posted = $_POST['email'];
	$password_posted = $_POST['password'];
	$password2_posted = $_POST['password2'];


	/* Consultamos en la tabla de tUsuarios */
	$query = "select email, contraseña from tUsuarios where email = '".$email_posted."'";
	$query_result = mysqli_query($db, $query) or die('Query error');


	if (empty($nombre_posted) || empty($apellidos_posted) || empty($email_posted)||
	empty($password_posted) || empty($password2_posted)) {
		echo '<p>Faltan campos por completar</p>';
	} elseif (mysqli_num_rows($query_result) > 0) { /*comprobamos si existe un usuario con ese email*/
		echo '<p>Este correo ya está registrado</p>';/* si existe, notificamos el error */
	} elseif ($password_posted !== $password2_posted) { /*Comprobamos que la contraseña sea igual en las dos celdas*/
		echo '<p>Las contraseñas no coinciden</p>';
	} else {
		$hashed_password = password_hash($password_posted, PASSWORD_DEFAULT);
		$insert_user_query = "Insert into tUsuarios (id, nombre, apellidos, email, contraseña) values (NULL,'".$nombre_posted."','".$apellidos_posted."','".$email_posted."','".$hashed_password."')";
		$insert_user_result = mysqli_query($db, $insert_user_query) or die ('Query error');

		if ($insert_user_result) {
			session_start();
			$_SESSION['user_id'] = $only_row[0];
			header('Location: main.php');
		} else {
			echo '<p>Hay un error en el registro</p>';
		}
	}

	mysqli_close($db);
?>
