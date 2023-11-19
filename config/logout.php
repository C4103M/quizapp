<?php
	session_start();
	unset($_SESSION["codigo"]);
	unset($_SESSION["usuario"]);
	unset($_SESSION["email"]);
	unset($_SESSION["user_xp"]);
	unset($_SESSION["foto_perfil"]);
	unset($_SESSION["permission"]);
	unset($_SESSION["logado"]);
	header("location:../index.php");
	
	// Certifique-se de sair do script após a definição dos cookies de expiração
	header("Location:../index.php");
?>
