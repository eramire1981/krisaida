<?php

	if (!empty($_POST['btnLogin'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if (!empty($user) and !empty($pass)) {
			include "../Modelo/conexion.php";
            $conexion=conexion();
            $consulta = "SELECT * FROM `usuario` WHERE `usuario`='$user' AND `contrasena`='$pass'";
            $registro = $conexion->query($consulta);
			$usuario = $registro->fetch_object();
			if ($usuario!=null) {
				$nombre = $usuario->nombre;
				session_start();
				$_SESSION['user']=$nombre;
								
				header("location:../Vista/administrador.php");
			}else{
				echo "
					<script>
						alert('usuario o contraseña incorrecto');
						window.location = '../Vista/inicio_sesion.php';
					</script>
					";
			}
			
		}else{
			echo('<div class="alert alert-warning">Error: Campos vacios</div>');
		}
	}
?>