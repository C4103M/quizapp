<?php
session_start();

if (isset($_GET["erro"])) {
    $erro = $_GET["erro"];
    if ($erro == 1) {
        echo "<script> alert('Faça o login novamente!'); </script>";
        print "";
    }
    if ($erro == 2) {
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
    <link rel="stylesheet" href="./css/form.css">
    <!-- <link rel="stylesheet" href="./css/header.css"> -->
    <title>Login</title>
</head>

<body>
    <header>
        <figure class="poweroff">
            <label class="switch">
                <input type="checkbox" id="check" onchange="changeMode()">
                <span class="slider">
                    <img src="./img/sun.svg" alt="sun" class="sun">
                    <img src="./img/moon.svg" alt="" class="moon">
                </span>
            </label>
        </figure>
    </header>
    <main>
        <section class="divwelcome">
            <section class="boasvindas">
                <div class="inicialpage">
                    <i><img src="./img/carlao2.png" class="carlaologin" alt=""></i>
                    <div class="div-boasvindas">
                        <p class="pboasvindas">
                            Bem-vindo ao nosso emocionante Quiz de Informática!
                    </div>
                </div>
            </section>
            <div class="butonAnimar2">
                <div class="butonAnimar">
                    <button class="btnlogin" type="submit" onclick="entrar()">Entrar</button>
                    <button class="cliqueaqui" type="submit" onclick="cadastrar()">Cadastrar</button>
                </div>
            </div>

            <div class="entrar">
                <div class="form1">

                    <span class="t1">Login</span>
                    <form action="" id="formLogin" method="post">
                        <div class="item">
                            <i><img src="./img/email.svg" alt=""></i>
                            <input type="email" placeholder="Email:" name="email_entrar" required>
                        </div>
                        <div class="item">
                            <i><img src="./img/cadeado.svg" alt=""></i>
                            <input type="password" placeholder="Senha:" name="senha_entrar" required>
                        </div>

                        <div class="item">
                            <p class="cadparagrafo">Não possui uma conta?<br> <button class="btn-none" onclick="troca2()">Cadastre-se</button></p>
                            <button type="submit" id="ButonLogin" class="btn-enviar">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="form2">
                    <span class="t1">Cadastrar</span>
                    <form action="" id="formLogin" method="post">
                        <div class="item">
                            <i><img src="./img/altername.svg" alt=""></i>
                            <input type="text" placeholder="Nome de Usuário:" name="nome" required>
                        </div>
                        <div class="item">
                            <i><img src="./img/email.svg" alt=""></i>
                            <input type="email" placeholder="Email:" name="email" required>
                        </div>
                        <div class="item">
                            <i><img src="./img/cadeado.svg" alt=""></i>
                            <input type="password" placeholder="Senha:" name="senha" required>
                        </div>
                        <div class="item">
                            <i><img src="./img/cadeado.svg" alt=""></i>
                            <input type="text" placeholder="Confirmar Senha:">
                        </div>
                        <div class="item">
                            <p class="cadparagrafo">Já possui conta?<br> <button class="btn-none" onclick="troca1()">Entrar</button></p>
                            <button type="submit" id="ButonLogin" class="btnlogin">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="divspan">
            <span class="span1">Quiz</span><br>
            <span class="span2">Info</span>
        </div>
 



    </main>








    <?php
    include('includes/login.php');
    ?>
    <script src="./js/darkmode.js"></script>
    <script src="./js/login.js"></script>
</body>

</html>