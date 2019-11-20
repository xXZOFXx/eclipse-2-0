<?php

	//Proceso de conexión con la base de datos
	include("/eclipse/static/src/php/conn.php");

	//echo "Form <br>";

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$empresa = $_POST['empresa'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$pais = $_POST['pais'];
	$comentarios = $_POST['comentarios'];
	$producto = "Eclipse";
	$oculto = $_POST['oculto'];
	//echo $nombre;

	// specify params - MUST be a variable that can be passed by reference!
	$myparams['nombre'] = $nombre;
	$myparams['apellidos'] = $apellidos;
	$myparams['nom_emp'] = $empresa;
	$myparams['telefono'] = $telefono;
	$myparams['correo'] = $correo;
	$myparams['pais'] = $pais;
	$myparams['coment'] = $comentarios;
	$myparams['nom_producto'] = $producto;

	// Set up the proc params array - be sure to pass the param by reference
	$procedure_params = array(
	array(&$myparams['nombre'], SQLSRV_PARAM_IN),
	array(&$myparams['apellidos'], SQLSRV_PARAM_IN),
	array(&$myparams['nom_emp'], SQLSRV_PARAM_IN),
	array(&$myparams['telefono'], SQLSRV_PARAM_IN),
	array(&$myparams['correo'], SQLSRV_PARAM_IN),
	array(&$myparams['pais'], SQLSRV_PARAM_IN),
	array(&$myparams['coment'], SQLSRV_PARAM_IN),
	array(&$myparams['nom_producto'], SQLSRV_PARAM_IN)
	);

	if ($oculto == "") {

		$sql = "EXEC sp_registro @nombre = ?, @apellidos = ?, @nom_emp = ?, @telefono = ?, @correo = ?, @pais = ?, @coment = ?, @nom_producto = ?";
		//echo $sql;
		$stmt = sqlsrv_prepare($conn, $sql, $procedure_params);
		if( !$stmt ) {
			die( print_r( sqlsrv_errors(), true));
		}

		if(sqlsrv_execute($stmt)){
			while($res = sqlsrv_next_result($stmt)){ }
		}
		else{
			die( print_r( sqlsrv_errors(), true));
		}

	}

	$to      = "ricardo.zuniga@eclipsemex.mx";
	$subject = "Solicitud de informacion - Eclipse";
	$message = "Una persona solicita informacion acerca de Eclipse, a continuacion se muestran sus datos:\n\n".
	            "Nombre: " . $nombre . "\n".
	            "Apellidos: " . $apellidos . "\n".
	            "Empresa: " . $empresa . "\n".
	            "Correo: " . $correo . "\n".
	            "Telefono: " . $telefono . "\n".
	            "Pais: " . $pais . "\n".
	            "Comentarios: " . $comentarios . "\n";
	$headers = "From:" . $correo . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	echo "<script>window.location.href = '/eclipse/static/src/html/contacto.html';</script>";

	sqlsrv_free_stmt($stmt);
	sqlsrv_close($conn);
?>
