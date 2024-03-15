<?php
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>WebLife</title>
	<link rel="stylesheet"  href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/image (2).png">
	<div class="container">
		<div class="img">
			<img src="img/bg (1).png">
		</div>
		<div class="login-content">
			<form action="signin-logic.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Bienvenido</h2>
				<?php if (isset($_SESSION['signup-success'])) : ?>
                <div class="alert__message success">
                    <p>
                        <?= $_SESSION['signup-success'];
                        unset($_SESSION['signup-success']);
                        ?>
                    </p>
                </div>
            	<?php elseif (isset($_SESSION['signin'])) : ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['signin'];
                        unset($_SESSION['signin']);
                        ?>
                    </p>
                </div>
            	<?php endif ?>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Nombre de usuario</h5>
						<input type="text" class="input" name="username_email" value="<?= htmlspecialchars($username_email) ?>">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i"> 
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Contraseña</h5>
						<input type="password" class="input" name="password" value="<?= htmlspecialchars($password) ?>">
					</div>
				</div>
				<a href="#">¿Olvidaste tu contraseña?</a>
				<input type="submit" class="btn" value="Login" name="submit">
				<small>¿Aún no tienes una cuenta? <a href="signup.php">Crear cuenta</a></small>
			</form>
		</div>
	</div>
	<script src="js/main2.js"></script>
</body>
</html>
