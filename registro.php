<?php
require 'database.php';

$message = '';


if (!empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['documento'])) {
	$sql = "INSERT INTO usuarios (email, nombre, documento) VALUES (:email, :nombre, :documento)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':nombre', $_POST['nombre']);
	$stmt->bindParam(':documento', $_POST['documento']);

	if ($stmt->execute()) {
		$message = '‍‍‍‍‍ㅤ';
		header('location: index3.html');
	} else {
		$message = 'error';
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="img/core-img/icono.ico">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="stylefor.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/5210d62ad0.js" crossorigin="anonymous"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

	<title>Ingreso</title>
</head>

<body>


	<div class="testbox">
		<h1>Registro</h1>

		<form action="registro.php" method="post">
			<hr>
			<label id="icon" for="name"><i class="icon-envelope "></i></label>
			<input type="text" name="email" placeholder="Email" required />

			<label id="icon" for="name"><i class="icon-user"></i></label>
			<input type="text" name="nombre" placeholder="Nombre" required />

			<label id="icon" for="name"><i class="fa-solid fa-id-card"></i></i></label>
			<input type="password" name="documento" placeholder="Documento" required />
			<input class="bconfir" type="submit" value="Enviar">
		</form>

			<?php if (!empty($message)) : ?>
				<p> <?= $message ?></p>
			<?php endif; ?>

		<a href="index.html"><button class="backb">
				<svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
					<path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
					</path>
				</svg>
				<span>Atras</span>
			</button></a>
		
	</div>

</body>

</html>