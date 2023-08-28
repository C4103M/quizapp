<?php 
if(isset($_GET["erro"])){
	$erro = $_GET["erro"];
	if($erro==1){
		echo "<script> alert('Faça o login novamente!'); </script>";
		print"";
	}
	if($erro==2){
		echo "<script> alert('Faça o login novamente!'); </script>";
	}
} 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Login</title>
</head>
<body>
    <header>
        <h1><span>QI+</span> QuizInfo+</h1>
    </header>
    <section class="hide">
        <!-- <img src="imagens/pixel.png" alt=""> -->
        <h1 class="titulo">Login</h1>
        <div class="form">
            <form action="" method="post">
                <p>Email:</p>
                <input type="email" placeholder="Usuário:" name="email_entrar" required>
                <p>Senha:</p>
                <input type="password" placeholder="Senha:" name="senha_entrar" required>

                <button type="submit" class="btn-enviar">Entrar</button>

                <button type="button" class="btn-enviar" onclick="cadastrar()">Cadastre-se</button>
            </form>
        </div>
    </section>
    <section class="hide2">
        <!-- <img src="imagens/pixel.png" alt=""> -->
        <p class="titulo">Cadastre-se</p>
        <div class="form">
            <form action="#" method="post" id="meuFomrulario">
                <p>Email:</p>
                <input type="email" placeholder="Email:" name="email" required>
                <p>Nome:</p>
                <input type="text" placeholder="Nome de Usuário:" name="nome" required>
                <p>Senha:</p>
                <input type="password" placeholder="Senha:" name="senha" required>
                <button type="submit" class="btn-enviar">Cadastrar</button>
                <p class="txt-btn">Já possui uma conta? <span onclick="entrar()" id="entre">Entre</span></p>
            </form>
        </div>
    </section>
    <?php 
    include('includes/login.php');
    ?>
    <script src="js/login.js"></script>
</body>

</html>