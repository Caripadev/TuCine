<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
include_once('layouts/header.php'); 
?>

	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1><a href="index.php">Inicio</a></h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
				<a href="includes/logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar sesion</a>
			</div>
		</nav>
		<div class="content">
			<h2>Presentacion</h2>
			<p>Bienvenido <?=$_SESSION['name']?>!</p>
		</div>

<?php   include_once('layouts/footer.php');  ?>