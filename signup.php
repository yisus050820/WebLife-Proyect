<?php
require 'config/constants.php';


$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;


unset($_SESSION['signup-data']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>WebLife</title>
	<link rel="stylesheet" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script>
        // Función para redirigir al usuario
        function redirectToPage() {
            window.location.href = "terminos.html";
        }
    </script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/image (2).png">
	<div class="container">
		<div class="img">
			<img src="img/bg (1).png">
		</div>
		<div class="login-content">
            <?php if (isset($_SESSION['signup'])) : ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['signup'];
                        unset($_SESSION['signup']);
                        ?>
                    </p>
                </div>
            <?php endif ?>
			<form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
				
				<h2 class="title">Regístrate</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Nombre</h5>
                        <input type="text" class="input" name="firstname" value="<?= htmlspecialchars($firstname) ?>">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Apellido</h5>
                        <input type="text" class="input" name="lastname" value="<?= htmlspecialchars($lastname) ?>">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Nombre de usuario</h5>
                        <input type="text" class="input" name="username" value="<?= htmlspecialchars($username) ?>">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Correo</h5>
                        <input type="email" class="input" name="email" value="<?= htmlspecialchars($email) ?>">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Crear contraseña</h5>
                        <input type="password" class="input" name="createpassword" value="">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirmar contraseña</h5>
                        <input type="password" class="input" name="confirmpassword" value="">
                    </div>
                </div>
                
                    <input type="file" name="avatar" id="avatar" style="margin-top: 0px;">
                    <hr>
                    <label for="suscripcion" onclick="redirectToPage()">Aceptar terminos y condiciones </label>
                    <input type="checkbox" id="suscripcion" name="suscripcion">
                
                <input type="submit" class="btn" value="Registrarse" name="submit">
                <small>¿Ya tienes una cuenta? <a href="signin.php">Iniciar Sesión</a></small>
                

			</form>
		</div>
	</div>
	<script src="js/main2.js"></script>
</body>
</html>
