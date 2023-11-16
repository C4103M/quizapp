<?php
	setcookie("user_id", "", time() - 3600, "/");
	setcookie("user_name", "", time() - 3600, "/");
	setcookie("user_email", "", time() - 3600, "/");
	setcookie("user_xp", "", time() - 3600, "/");
	setcookie("foto_perfil", "", time() - 3600, "/");
	setcookie("permission", "", time() - 3600, "/");
	
	// Certifique-se de sair do script após a definição dos cookies de expiração
	header("Location:../index.php");
?>
